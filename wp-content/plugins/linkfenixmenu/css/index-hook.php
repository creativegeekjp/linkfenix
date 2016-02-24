<?php 

function styles()
{ 
    echo '<style>';
    echo '
    .wrap{
        margin-top: 30px;
    }
    b{
        font-family: Serif;
        font-size: 25px;
        margin-right: 30px;
    
    }
    #searchsubmit{
        background-color: #fff;
        color: #000;
        border: 1px solid #ccc;
        width: 100px;
        height: 30px;
    }
    div#int-wrapper-content{
        
    }
    div#int-main-content{
        width: 58%;
        float: left;
    }
    div#movie-content{
        width: 40%;
        float: right;
    }
    div#mov-content{
        line-height:30px;
    }
    hr#line
    {
        border-color: #000000;
    }
    ';
    echo '</style>';
}

add_action('admin_head', 'styles');

?>