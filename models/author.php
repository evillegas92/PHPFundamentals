<?php
/**
 * Description of author
 *
 * @author Esteban.Villegas
 */
class Author {
    
    public $id;
    public $firstName;
    public $lastName;
    public $penName;
    
    function __construct($id, $firstName, $lastName, $penName) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->penName = $penName;
    }
}
