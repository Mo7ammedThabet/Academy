<?php
/**
 * getAllSuccessMessages : prepare success messages
 *
 * @return string
 */
function getAllSuccessMessages()
{
    $message = '';
    $success_messages = session()->get('success');
    if (is_array($success_messages)) {
        foreach ($success_messages as $success_message) {
            $message .= '<p>' . $success_message . '</p>';
        }
    } elseif (is_string($success_messages) && $success_messages) {
        $message .= '<p>' . $success_messages . '</p>';
    }

    return $message;
}

/**
 * getAllErrors : combine errors from validation and session
 *
 * @return string
 */
function getAllErrors($errors)
{
    $message = '';
    if ($errors->any()) {
        foreach ($errors->all() as $error) {
            $message .= '<p>' . $error . '</p>';
        }
    }

    $error_messages = session()->get('error');
    if ($error_messages) {
        if (is_array($error_messages)) {
            foreach ($error_messages as $error_message) {
                $message .= '<p>' . $error_message . '</p>';
            }
        } elseif (is_string($error_messages) && $error_messages) {
            $message .= '<p>' . $error_messages . '</p>';
        }
    }

    return $message;
}

 function menu_item_is_active($urls,$seqment)
{
    $array_urls = explode(",",$urls);
    foreach ($array_urls as $url) {
       $active = Str::startsWith(
        $url,
        $seqment
    );
    if($active){
        return true;
    }
    }
    return false;
}
