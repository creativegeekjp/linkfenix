<?php 
function avatar($atts, $content=null)
{
  
        $html .= '<p>Avatar is the most powerful, purest self-development program available. 
        
                 It is a series of experiential exercises that enables you to rediscover 
                 
                 your self and align your consciousness with what you want to achieve. 
                 
                 You will experience your own unique insights and revelations. It’s you 
                 
                 finding out about you. Avatar is a nine-day self-empowerment training 
                 
                 delivered by a world-wide network of licensed Avatar Masters. Over 50,000 
                 
                 graduates from 65 countries, are enjoying the benefits of Avatar*.</p>';
                 
        $html .= '<a style="color:blue; font-size: 20px;" href="http://twitter.com/home/?status=Read' . $post_title . 'at' . $post_url . '">
        <b>Share on Twitter</b></a>';
        return $html;
}
function spiderman($atts, $content=null)
{
  
        $post_url = get_permalink($post->ID);
        $post_title = get_the_title($post->ID);
        
        $html .= '<p>Spider-Man is a fictional superhero appearing in American comic books published by Marvel Comics existing in its shared universe. 
        The character was created by writer-editor Stan Lee and writer-artist Steve Ditko, and first appeared in the anthology comic book Amazing
        Fantasy #15 (Aug. 1962) in the Silver Age of Comic Books. Lee and Ditko conceived the character as an orphan being raised by his Aunt May 
        and Uncle Ben, and as a teenager, having to deal with the normal struggles of adolescence in addition to those of a costumed crime-fighter. 
        Spider-Mans creators gave him super strength and agility, the ability to cling to most surfaces, shoot spider-webs using wrist-mounted 
        devices of his own invention, which he calls "web-shooters", 
        and react to danger quickly with his "spider-sense", enabling him to combat his foes</p>';
        
        
       
        $html .= '<a style="color:blue; font-size: 20px;" href="http://twitter.com/home/?status=Read' . $post_title . 'at' . $post_url . '">
        <b>Share on Twitter</b></a>';
        return $html;

}

add_shortcode('avatar', 'avatar');

add_shortcode('spiderman', 'spiderman');

?>