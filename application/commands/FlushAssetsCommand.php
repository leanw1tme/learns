<?php

class FlushAssetsCommand extends CConsoleCommand
{

    /**
     * @param array $aArguments
     * @return void
     */
    public function run($aArguments)
    {
        $sCurrentDir = dirname(__FILE__);
        $tmpFolder = realpath($sCurrentDir . '/../../tmp/');
        if ($tmpFolder === false) {
            echo 'Tmp folder  ' . $sCurrentDir . '/../../tmp/ not found';
            return;
        }
        echo "Flushing assets in " . $tmpFolder;
        echo "\n";

        $this->_sureRemoveFiles($tmpFolder . '/assets/', false, ['index.html']);
        $this->_sureRemoveFiles($tmpFolder . '/runtime/cache/', false, ['index.html']);
    }
    private function _sureRemoveFiles($dir, $DeleteMe, $exclude = array())
    {
        if (!$dh = @opendir($dir)) {
            return;
        }
        while (false !== ($obj = readdir($dh))) {
            if ($obj == '.' || $obj == '..' || in_array($obj, $exclude)) {
                continue;
            }
            if (!@unlink($dir . '/' . $obj)) {
                $this->_sureRemoveFiles($dir . '/' . $obj, true);
            }
        }
        closedir($dh);
        if ($DeleteMe) {
            if (!@rmdir($dir)) {
                echo "Error: could not delete " . $dir;
            }
        }
    }
}
