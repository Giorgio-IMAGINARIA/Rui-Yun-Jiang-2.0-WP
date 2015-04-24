<?php
function handleTitles($titleID) {
    $post = get_post($titleID);
    $title = $post->post_title;
    $firstletter=substr($title,0,1);
    $midpos=strrpos($title," ");
    $titlelength=strlen($title);
    if ($midpos != false) {
        $firstpiece=substr($title,1,$midpos);
        $secondletter=substr($title,$midpos+1,1);
        $secondpiecelength=$titlelength-$midpos+2;
        $secondpiece=substr($title,$midpos+2,$secondpiecelength);
        echo '<span class="firstLetter">';
        echo $firstletter;
        echo '</span>';
        echo $firstpiece;
        echo '<span class="firstLetter">';
        echo $secondletter;
        echo '</span>';
        echo $secondpiece;
    } else {
        $piecelength=$titlelength-1;
        $piece=substr($title,1,$piecelength);
        echo '<span class="firstLetter">';
        echo $firstletter;
        echo '</span>';
        echo $piece;
    }
}
?>