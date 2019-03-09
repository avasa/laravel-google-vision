<?php

Route::get('vision', function () {

    /*
     * Example Usage
     */
    $client = new \Avasa\Vision\GoogleVisionApi();
    $client->scan('gsv/test-image.png', \Avasa\Vision\GoogleVisionScanTypes::DOCUMENT_TEXT_DETECTION());
    $result = $client->get();

});