<?php
/**
 * Validate post data
 *
 * @param array $post The post data to validate
 * @return array An array containing validation errors
 */
function validatePost($post)
{

    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }
  
    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }
 
    if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    $existingPost = selectOne('posts', ['title'=> $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with that title  already exits');
        }
        
        if (isset($post['add-post'])) {
            array_push($errors, 'Post with that title  already exits');
        }
    }

    return $errors;
}
