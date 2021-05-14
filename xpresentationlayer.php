<?php

session_start();

/*==========================================================================  
     Class: xpresentationLayer
     Description: MVC View. Italviajes Helper Methods
     Version: 1.0
     Remarks:
     ========================================================================*/

class xpresentationLayer
{

    /*=======================================================================
    Function: startHtml
    Description: HTML TAG START according to language "lang"
    Parameters: $lang <--
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    static function startHtml($lang)
    {
        echo '<!DOCTYPE html>';
        echo '<HTML lang="' . $lang . '">';
    } // startHtml

    /*=======================================================================
    Function: endHtml
    Description: HTML TAG END and add the file .js
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    static function endHtml()
    {
        echo '</HTML>';
        echo '<SCRIPT src="./js/jquery-3.6.0.min.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/popper.min.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/bootstrap.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/bootstrap.bundle.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/main.js" type="text/javascript"></SCRIPT>';
        echo '<SCRIPT src="./js/jquery-3.6.0.min.js"></SCRIPT>';
        echo '<SCRIPT type="text/javascript" src="DataTables/datatables.min.js"></SCRIPT>';
        echo '<SCRIPT>';
        echo '    $(document).ready(function () {';
        echo '        $("#example").DataTable();';
        echo '    });';
        echo '</SCRIPT>';
    } // endHtml

    /*=======================================================================
    Function: buildHead
    Description: HTML Head, rendering "title"
    Parameters: $title <-- name of App
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function buildHead($title)
    {
        echo  '<HEAD>';
        echo  ' <TITLE>' . $title . '</TITLE> ';
        echo  ' <META charset="UTF-8"> ';
        echo  ' <META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/select2.min.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/style.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/animations.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/modal.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/loader.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/helpers.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/buttons.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/cards.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/inputs.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/titles.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/landing.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/canvas.css"> ';
        echo  ' <LINK href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
        echo  ' </HEAD> ';
    } //buildHead
    
    /*=======================================================================
    Function: startFormManu
    Description: start the form of menu 
    Parameters: $title <-- name of App
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startFormManu()
    {
            echo '<DIV class="container wrapper mt20">';
            echo '<form action="">';
    } //startFormManu

    /*=======================================================================
    Function: endFormManu
    Description: end the form of menu 
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endFormManu()
    {
        echo '</FORM>';
        echo '</DIV>';
    } //endFormManu

    /*=======================================================================
    Function: startContainerChecks
    Description: start container checks
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startContainerChecks()
    {
        echo '<DIV class="container-checks">';
    } //startContainerChecks

    /*=======================================================================
    Function: endDiv
    Description: end div tag
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endDiv()
    {
        echo '</DIV>';
    } //endDiv

    /*=======================================================================
    Function: buildChecks
    Description: end div tag
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function buildChecks()
    {
        echo '<DIV>';
        echo '    <LABEL class="mr20">';
        echo '        <INPUT class="option-input radio" name="group1" type="radio" />';
        echo '        <SPAN>Ida y Vuelta</SPAN>';
        echo '    </LABEL>';
        echo '</DIV>';
    } //buildChecks

    
}
