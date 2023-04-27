<?php

class AddNameToSurvey extends PluginBase
{
    protected $storage = 'DbStorage';
    static protected $description = 'Add name field to survey response';
    static protected $name = 'AddNameToSurvey';

    public function init()
    {
        /**
         * Here you should handle subscribing to the events your plugin will handle
         */
        $this->subscribe('beforeSurveyPage');
        $this->subscribe('newSurveySession');
        $this->subscribe('afterSurveyComplete');
    }

    /*
     * Below are the actual methods that handle events
     */
    public function beforeSurveyPage()
    {
        // Get the survey session
        $session = $this->api->getSession();
        
        // Check if the name field is already set in the survey session
        if (!isset($session['name'])) {
            // If not, show the name input field on the first page
            $event = $this->getEvent();
            $surveyId = $event->get('surveyId');
            $pageId = $event->get('pageId');
            
            // Get the question group ID for the first group on the first page
            $group = $this->api->getGroups($surveyId, $pageId);
            $groupId = $group[0]['gid'];
            
            // Add the name input field to the first question group on the first page
            $this->api->addQuestion(
                $groupId,
                'name',
                'text',
                [
                    'title' => 'Please enter your name',
                    'mandatory' => 'Y',
                ]
            );
        }
    }

    public function newSurveySession()
    {
        // Initialize the survey session with the name field
        $session = $this->api->getSession();
        $session['name'] = '';
        $this->api->setSession($session);
    }

    public function afterSurveyComplete()
    {
        // Get the survey response and add the name field to it
        $event = $this->getEvent();
        $surveyId = $event->get('surveyId');
        $responseId = $event->get('responseId');
        $response = $this->api->getResponse($surveyId, $responseId);

        $session = $this->api->getSession();
        if (isset($session['name'])) {
            $response['name'] = $session['name'];
            $this->api->saveResponse($responseId, $response);
        }
    }
}
