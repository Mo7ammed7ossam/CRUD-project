<?php 

    function inputElement($icon,$placeholder,$name,$value)
    {
        $ele = "<div class='input-group'>
                    <div class='input-group-prepend'>
                         <div class='input-group-text bg-primary text-light'> 
                            $icon
                        </div>
                    </div>
                    <input type='text' name='$name' value='$value' autocomplete='off' class='form-control' id='' placeholder='$placeholder'>
                </div>";
        echo $ele;
    }

    function buttonElement($name,$attr,$styleClass,$btnID,$text)
    {
        $btn = "<button name='$name' data-toggle='tooltip' data-placement='bottom' title='$attr' class='$styleClass px-5 py-2' id='$btnID'> $text </button>" ;
        echo $btn;
    }
?>