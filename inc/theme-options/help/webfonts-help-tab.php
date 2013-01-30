<p><?php printf( __( "Yeah, webfonts&hellip; you lov'em or you hate'em, it's simple as that. If you hate'em, just type the word %1s into the text field and they'll be gone.", 'meetup' ), '<code>off</code>' ); ?></p>
<p><?php printf( __( "If you love them, though, but need to define your own, head over to %1s and get your own collection! In this theme we use the javascript way of implementation, so look for that piece of code over there. You only need the line where it says something like: ", 'meetup' ), '<a href="' . __( 'http://www.google.com/webfonts', 'meetup' ) . '" target="_blank">' . __( 'Google webfonts', 'meetup' ) . '</a>' ); ?></p>
<pre>google: { families: [ 'Font+Name::latin' ] }</pre>
<p><?php _e( "Extract everything from inbetween the square brackets (these: [ ]) and paste it into your options text field. Don't forget to change the single quotes into double ones! In the end you should see something like this: ", 'meetup' ); ?></p>
<pre>"Your+Favorite+Font::latin", "Another+Font:400,700,400italic:latin"</pre>
<p><?php _e( "That's it! Save your options and your done.", 'meetup' ); ?></p>