<?php
// $footnoteNum = footnote in reference
// $quoteNum = quote in reference
// $quote = text that footnote is appended to
// $url = url of writing piece
//
// $quoteNum should be declared at top of piece. when calling function, set
// $quoteNum to the return value so it can be incremented with each quote
function makeFootnote($footnoteNum, $quoteNum, $quote, $url) {
  echo("<span id='quote-{$quoteNum}'>$quote</span>");
  echo("<sup><a href='{$url}&q={$quoteNum}&f={$footnoteNum}#footnote-{$footnoteNum}'>{$footnoteNum}</a></sup>");
  return $quoteNum += 1;
};

// $footnotes = array of footnotes
// $url = url of writing piece
function makeFootnotes($footnotes, $url) {
  echo("<br><h3 id='footnotes'>Footnotes</h3><br><ol>");
  for ($i = 1; $i <= count($footnotes); $i++) {
    if (array_key_exists("q", $_GET) && array_key_exists("f", $_GET)) {
      if ($_GET["f"] == $i) {
        echo("<li><p id='footnote-{$i}'><a href='{$url}#quote-{$_GET["q"]}'>{$footnotes[$i - 1]}</a></p></li>");
        continue;
      }
    }
    echo("<li><p id='footnote-{$i}'>{$footnotes[$i - 1]}</p></li>");
  }
  echo("</ol>");
}

// $title = section title
//
// $sections should be declared at top of piece. when calling function, set
// $sections to return value
function makeSection($title, $sections) {
  $sections[] = $title;
  $sectionNum = count($sections);
  echo("<br><h3 id='section-{$sectionNum}'>{$sectionNum}. {$title}</h3><br>");
  return $sections;
}
?>
