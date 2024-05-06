<?php
class User {}
class AnonUser extends User
{
    /**
     * @return false
     */
    public function isAdmin(): false
    {
        return false;
    }
}

class AdminUser extends User
{
    /**
     * @return false
     */
    public function isAdmin(): true
    {
        return true;
    }
}

// must return null or error will be triggered
function foo(): null {
    return  null;
}
foo();
// will trigger error
 function nullable(): null {}