<?php

class character
{
    public $name;
    public $power;
    public $magic;
    public $armor;
    public $care;
    public $life;
    public $avatar;
    
    public function __construct($name, $power, $magic, $armor, $care, $life, $avatar)
    {
     $this->name = $name; 
     $this->power = $power; 
     $this->magic = $magic;
     $this->armor = $armor;
     $this->care = $care;
     $this->life = $life;
     $this->avatar = $avatar;
    }

    // Regenerate life function
    public function regenerate($lifeBonus = 0)
    {
        if ($lifeBonus == 0) {
            $lifeBonus = $this->care;
        }
        
     $this->life += $lifeBonus;
     echo '<div class="game">';
     echo '<h4>'.$this->name. '</h4>&nbsp;&nbsp;<span id="care"><i class="fas fa-briefcase-medical"></i></span>Regenere de '. $lifeBonus .' points de vie.</br>'; 
     echo 'il a maintenant '.$this->life.' points de vie.</br>';
     echo '</div>';
    }

    // Character describe
    public function describe()
    {
        if ($this->life < 101) {
            echo '<div class="containerLife"><div class="life" style="background-color: chartreuse;width: '.$this->life.'%;">'.$this->life.'</div></div>';
        } else {
            echo '<div class="containerLife"><div class="life" style="background-color: blue;width:100%;">'.$this->life.'</div></div>';
        }
        echo '<span id="perso"><img src="img/'.$this->avatar.'.jpg" alt="Avatar"></span></br>';
        echo '<div class="containerDescribe">';
        echo '<Héros : '.$this->name.'</br>';
        echo "Dispose d'une force de : ".$this->power.'</br>';
        echo "Dispose d'une force Magique de : ".$this->magic.'</br>';
        echo "Dispose d'une armure de : ".$this->armor.'</br>';
        echo "Dispose de soin : ".$this->care.'</br>';
        echo '</div>';
    }

    // Attack function
    public function attack(character $defender)
    {
        $defender->life = $defender->life - ($this->power-$this->armor);

        echo '<div class="game">';
            if ($this->life < 101) {
                echo '<div class="containerLife"><div class="life" style="background-color: chartreuse;width: '.$this->life.'%;">'.$this->life.'</div></div>';
            } else {
                echo '<div class="containerLife"><div class="life" style="background-color: blue;width:100%;">'.$this->life.'</div></div>';
            }
        echo '<img src="img/'.$this->avatar.'.jpg" alt="Avatar"></br>';
        echo '<div class="containerAttack">';
        echo '<h4>'.$this->name.' </h4><span id="brut"><i class="fas fa-hammer"></i></span>attaque<h4> '.$defender->name.'</h4></br>';
        echo $this->name." dispose d'une vie de : ".$this->life.'</br>';
        echo $defender->name." dispose d'une vie de : ".$defender->life.'</br>';
        
    
            if ($defender->isAlive()){
                echo $defender->name.' est toujours vivant <br>';
                echo '</div>';
            } else {
                echo '</div><div id="deathContainer">';
                echo '<img src="img/'.$defender->name.'-death.jpg" alt="Avatar"><div class="death">'.$defender->name.'<i class="fas fa-skull-crossbones"></i> est mort(e)</div>';
                echo '</div>';
            } 
        echo '</div>'; 
    }

    // Magic attack function
    public function magicAttack(character $defender)
    {
        $defender->life = $defender->life - $this->magic;
        
        echo '<div class="game">';
        echo '<h4>'.$this->name.'</h4>&nbsp;&nbsp;<span id="magic"><i class="fas fa-hat-wizard"></i></span>Attaque Magique sur '.$defender->name.'</br>';
        echo $this->name." dispose d'une vie de : ".$this->life.'</br>';
        echo $defender->name." dispose d'une vie de : ".$defender->life.'</br>';
        
            if ($defender->isAlive()){
                echo $defender->name.' est toujours vivant <br>';
            } else {
                echo '<div id="deathContainer">';
                echo '<img src="img/'.$defender->name.'-death.jpg" alt="Avatar"><div class="death">'.$defender->name.'<i class="fas fa-skull-crossbones"></i> est mort(e)</div>';
                echo '</div>';
            }
        echo '</div>';    
    }

    // verification function if still alive
    public function isAlive()
    {
        if ($this->life > 0){
            return true;
        }
        else {
            return false;
        }
    }

    // Hazard function
    public function hazard($defender)
    {
        $whatNow = rand(0, 2);
        if (!$whatNow) {
            $this->regenerate();
        } elseif ($whatNow == 1) {
            $this->magicAttack($defender);
        } else {
            $this->attack($defender);
        }
    } 
     
};

?>