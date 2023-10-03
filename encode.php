function addSalt(name){
    $salt = 'rZRFSDFZeffzEfezferefnnezjfb';
    $name = $salt.$name.$salt;
    return $name;
}