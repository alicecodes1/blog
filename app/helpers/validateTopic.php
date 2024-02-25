<?php
/**
 * Validate a topic before adding or updating it
 *
 * @param array $topic The topic data to validate
 * @return array An array containing any validation errors
 */
function validateTopic($topic)
{

    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }
  
    $existingTopic = selectOne('topics', ['name'=> $topic['name']]);
    if ($existingTopic) {
        if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Name already exits');
        }
        
        if (isset($topic['add-topic'])) {
            array_push($errors, 'Name already exists');
        }
    }
    return $errors;
}