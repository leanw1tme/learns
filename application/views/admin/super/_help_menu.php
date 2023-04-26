
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="helpDropdown" aria-expanded="false" role="button">
        <!-- <i class="ri-question-fill"></i> -->
        <?php eT('Help');?>
    </a>
    <ul class="dropdown-menu larger-dropdown" aria-labelledby="helpDropdown">
        <?php $this->renderPartial( "/admin/super/_tutorial_menu", []); ?>
        <li class="dropdown-divider"></li>
        <li>
            <a href="http://manual.limesurvey.org/" target="_blank" class="dropdown-item">
                <!-- <i class="ri-question-fill"></i> -->
                <?php eT('LimeSurvey Manual');?>
                <i class=" ri-external-link-fill  float-end"></i>
            </a>
        </li>
    </ul>
</li>
