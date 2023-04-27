<?php
class AddNameToSurvey extends PluginBase {
    protected $storage = 'DbStorage';
    static protected $description = 'Add name to survey responses';
    static protected $name = 'Add name to survey';

    public function init()
    {
        /**
         * Subscribe to events for the plugin
         */
        $this->subscribe('beforeSurveyPage');
        $this->subscribe('beforeTokenStatistics');
    }

    public function beforeSurveyPage()
    {
        $event = $this->getEvent();
        $surveyId = $event->get('surveyId');
        $currentPage = $event->get('currentPage');

        if ($currentPage == 1) {
            // Add a new question to the beginning of the survey
            $newQuestion = array(
                'type' => 'T',
                'title' => 'Please enter your name:',
                'name' => 'name',
                'language' => 'en',
                'mandatory' => 'Y',
            );

            // Add the question to the survey
            $event->get('survey')->addNewQuestion($newQuestion);
        }
    }

    public function beforeTokenStatistics()
    {
        $event = $this->getEvent();
        $response = $event->get('response');

        // Get the value of the "name" question
        $name = $response['name'];

        // Save the name to the database
        $this->saveData($response['id'], array('name' => $name));
    }
}

