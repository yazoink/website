<h1>About Me...</h1>
<br>
<p>
  Hi, my name is Gene and I like making things. I look like
  <a href="images/me.webp" target="_blank">this</a> and my main interests at the
  moment are:
</p>
<br />
<ul>
  <li>Pretty much anything related to Linux (I use NixOS btw)</li>
  <li>Homelabbing / home server administration</li>
  <li>Art (especially oil paintings and late 20th century comix)</li>
  <li>Listening to a lot of music and playing guitar</li>
  <li>Beat literature</li>
  <li>Programming</li>
  <li>Modding old ThinkPads</li>
  <li>Bookbinding</li>
</ul>
<br />
<h2>My Favourite Movies</h2>
<br>
<p>I don't watch movies often and I'm very picky, but I try lol</p>
<p>(click the posters for IMDB pages)</p>
<br />
<?php printImageGallery("images/movies", $movies, false); ?>
<br />
<h2>My Favourite Shows</h2>
<br>
<p>(click the posters for IMDB pages)</p>
<br />
<?php printImageGallery("images/shows", $shows, false); ?>
<br />
<h2>My Favourite Books</h2>
<br>
<p>
  Been really trying to read more recently. I'm big into beat literature
  and my favourite author is William S. Burroughs.
</p>
<p>(click covers for Goodreads pages)</p>
<br />
<?php printImageGallery("images/books", $books, false); ?>
<br />
<h2>My Favourite Visual Artists</h2>
<br>
<p>Definitely forgetting a few...</p>
<br />
<ul>
  <li>Basil Wolverton</li>
  <li>Robert Crumb</li>
  <li>Daniel Johnston</li>
  <li>Malcom Liepke</li>
  <li>Toulouse-Lautrec</li>
  <li>Francis Bacon</li>
  <li>Gustave Dore</li>
</ul>
<br />
<h2>My Favourite Albums</h2>
<br>
<p>
  Oh man I could go on for days about music and I'm definitely forgetting a few
  here, but definitely consider checking out some of the albums on this list if you
  haven't heard of them.
</p>
<p>(click covers for YouTube links)</p>
<br />
<?php printImageGallery("images/albums", $albums, true); ?>
<br />
<h2>My Favourite Bands/Musicians</h2>
<br>
<p>Again, definitely forgetting a few...</p>
<br>
<?php printDoubleList($musicians); ?>
