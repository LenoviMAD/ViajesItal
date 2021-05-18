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
    Parameters: 
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
    Function: startForm
    Description: start the form of menu 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startForm($id = "", $event = "", $class = "")
    {
        if ($event != "") {
            $event = 'onsubmit="' . $event . '"';
        }
        if ($class != "") {
            $class = 'class="' . $class . '"';
        }
        if ($id != "") {
            $id = 'id="' . $id . '"';
        }

            echo '<DIV class="container wrapper mt20">';
            echo '<FORM ' . $id . $event . $class . '>';
    } //startForm
    
    /*=======================================================================
    Function: endFormManu
    Description: end the form of menu 
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function endForm()
    {
        echo '</FORM>';
        echo '</DIV>';
    } //endFormManu
    
    /*=======================================================================
    Function: startDiv
    Description: start div 
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startDiv($class)
    {
        echo '<DIV class="'.$class.'">';
    } //startDiv
    
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
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildChecks($title, $nameInput, $idInput)
    {
        echo '<DIV>';
        echo '    <LABEL class="mr20">';
        echo '        <INPUT class="option-input radio" id="'.$idInput.'" name="'.$nameInput.'" type="radio" />';
        echo '        <SPAN>'.$title.'</SPAN>';
        echo '    </LABEL>';
        echo '</DIV>';
    } //buildChecks
    
    /*=======================================================================
    Function: startContainerInputs
    Description: start the container inputs
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */

    static function startContainerInputs()
    {
            echo '<DIV class="displayf">';
            echo '  <DIV class="container-inputs">';
    } //startContainerInputs
    
    /*=======================================================================
    Function: endContainerInputs
    Description: end div double tag
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function endContainerInputs()
    {
        echo '  </DIV>';
        echo '</DIV>';
    } //endContainerInputs
    
    /*=======================================================================
    Function: buildInputWithIcon
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildInputWithIcon($title, $typeInput, $nameInput, $idInput, $icon, $placeholder)
    {
        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">'.$title.'</LABEL>';
        echo '    <INPUT class="input-icon" type="'.$typeInput.'" placeholder="'.$placeholder.'" name="'.$nameInput.'"  id="'.$idInput.'"></INPUT>';
        echo '    <BUTTON type="submit" class="btn-icon" disabled>';
        echo '        <I class="ion-android-arrow-forward material-icons prefix">'.$icon.'</I>';
        echo '    </BUTTON>';
        echo '</DIV>';
    } //buildInputWithIcon

    
    /*=======================================================================
    Function: buildChecks
    Description: build a check component
    Parameters: $title <-- Title of label
    $idInput <-- Id of the input
    $nameInput <-- Name of the checks
    Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildInput($title, $nameInput, $idInput, $placeholder = "")
    {
        echo '<DIV class="webflow-style-input">';
        echo '    <LABEL for="" class="title-Input">'.$title.'</LABEL>';
        echo '    <INPUT class="input-icon icon-absolute" type="text" placeholder="'.$placeholder.'" name="'.$nameInput.'"  id="'.$idInput.'"></INPUT>';
        echo '</DIV>';
    } //buildChecks
    
    /*=======================================================================
    Function: buildChecks
    Description: build a check component
    Parameters: $title <-- Title of label
                $idInput <-- Id of the input
                $nameInput <-- Name of the checks
                Algorithm: 
    Remarks:
    Standarized: 2021-05-14 09:40
    ===================================================================== */
    
    static function buildCheckBox($title, $nameInput, $idInput)
    {
        echo '<DIV class="width-25percent">';
        echo '    <INPUT type="checkbox" id="'.$idInput.'" name="'.$nameInput.'"/>';
        echo '    <LABEL for="test1">'.$title.'</LABEL>';
        echo '</DIV>';
    } //buildChecks
    
}
