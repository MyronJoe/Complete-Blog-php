<?php 

function validateTopic($topic, $errors){
    if (empty($topic["name"])) {
        array_push($errors, 'Topic name is required');
    }
    //checking if a topic already exist
    $existingTopic= selectOne('topics', ['name' => $topic["name"]]);
    if($existingTopic){
        if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Topic already exists');
        }

        if (isset($topic['create-topic'])) {
            array_push($errors, 'Topic already exists');
        }
        
    }
    // dump($errors);
    return $errors;
}


?>