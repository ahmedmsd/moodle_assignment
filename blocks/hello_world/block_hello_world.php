<?php
class block_hello_world extends block_base {
    public function init() {
        $this->title = get_string('hello_world', 'block_hello_world');
    }
    public function get_content() {
     if ($this->content !== null) {
       return $this->content;
     }

     $this->content         =  new stdClass;
     $this->content->text   = 'The content of our Hello World block!';
     $this->content->footer = 'Footer here...';

     return $this->content;
 }
}
