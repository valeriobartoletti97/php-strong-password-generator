<?php

function generatePassword(){
    if(isset($_GET["password"])) {
        $password = $_GET["password"];
        if($password === ''){
            return 'Error';
        }
        //var_dump($password);
        $characters = 'abcdefghilmnopqrstuvzwyxjk';
        $charactersCapital = strtoupper($characters);
        //var_dump($charactersCapital);
        $numbers = '0123456789';
        $specialCharacters = '~`!@#$%^&*()_-+={[}]|\:;<,>.?/';
        $allCharacters= $characters . $numbers . $specialCharacters . $charactersCapital;
        $generatedPassword ='';
        //var_dump($allCharacters);
        while(strlen($generatedPassword) < $password){
            $newPassCharacter = $allCharacters[rand(0, strlen($allCharacters) -1)];
            if(!str_contains($generatedPassword, $newPassCharacter)){
            $generatedPassword .= $newPassCharacter;
            }
        }
        //var_dump($generatedPassword);
        return $generatedPassword;
    }
}

?>
