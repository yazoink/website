<?php
require "writing/functions.php";

$url = "?nav=writing&piece=the-human-machine";
$quoteNum = 1;
$sections = array();
?>
<div class="box-container">
  <div class="box">
    <div class="left-right-container box-heading">
      <div class='left-right-container-left'>
        <p>CONTENTS</p>
      </div>
      <div class='left-right-container-right x-button'><p>X</p></div>
    </div>
    <div class='box-content'>
      <p><a href="<?php echo $url; ?>">The Human Machine</a></p><br>
      <ol>
        <li><a href='#section-1'>Ones and Zeroes</a></li>
        <li><a href='#section-2'>The Meaning of Meaning</a></li>
        <li><a href='#section-3'>The Wave Pool</a></li>
        <li><a href='#section-4'>The Gateway Revisited</a></li>
        <li><a href='#section-5'>Infinity and Interference</a></li>
        <li><a href='#section-6'>Self-Awareness</a></li>
        <li><a href='#section-7'>The Quantum Man-Machine</a></li>
      </ol>
      <br>
      <p><a href='#footnotes'>Footnotes</a></p>
    </div>
  </div>
</div>
<br>
<p>
  The Human is a machine that operates on a binary "go/no go" basis. It receives
  a stream of raw three-dimensional perceptive data. In order to make sense of
  this data, it must sort it into two-dimensional semantic concepts and
  categories, like "good" or "chair", which are analysed mathematically. The
  Machine ultimately makes a decision: yes, or no; do, or don’t; one or zero.
</p>
<?php
$sections = makeSection("Ones and Zeroes", $sections);
?>
<p>
  The TV that is receiving a completely uniform signal shows a screen that is
  illuminated, but blank. It begins to receive a signal and it starts playing a
  video. The signal is comprised of ones and zeroes, usually in clumps of
  various sizes. The camera broadcasting the video is reading an aspect of the
  three-dimensional world and translating it into binary.
</p>
<br />
<p>
  Now, the world around the camera has disappeared and there is nothing left to
  record or translate. The signal to the TV is uniform, once more – there is no
  signal.
</p>
<br />
<p>
  I have held the belief that the Human consciousness operates in binary for a while. This
  belief was reinforced upon reading the declassified CIA report: "Analysis and
  Assessment of Gateway Process", which had this to say on the subject:
</p>
<br />
<div class="content-indent">
  <p>
    The consciousness process is most easily envisaged if we picture the
    [perceptive] input with a three dimensional grid system superimposed over it
    such that all of the energy patterns contained within can be described in
    terms of three dimensional geometry using mathmatics to reduce the data to
    two dimensional form. [Itzhak] Bentov states that scientists suspect that
    the human mind operates on a simple binary "go/no go" system as do all
    digital computers. Therefore, once it superimposes a three dimensional
    matrix over [perceptive] information it wishes to interpret and reduces that
    information mathmatically to two dimensional form, it can completely process
    it using its fundamental binary system just as any computer made by the hand
    of man can process volumes of data and make various comparisons between the
    data and information stored in its digital memory. Our minds operate in the
    same way, perceiving by comparison only. Bentov states the proposition this
    way: "Our whole reality is constructed by constantly making such
    comparisons....Whenever we perceive something, we always perceive
    differences only."
    <?php
      $quote = " In states of expanded consciousness, the right hemisphere
      of the human brain in its holistic, nonlinear and nonverbal mode of
      functioning acts as the primary matrix or receptor for this [perceptive]
      input while, by operating in phase or coherence with the right brain, the
      left hemisphere provides the secondary matrix through its binary,
      computer-like method of functioning to screen further the data by comparison
      and reduce it to a discreet, two dimensional form.";
      $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  I wanted to investigate this further. We know that the Human and the Machine
  <i>are</i> fundamentally different, so where is the distinction? If the brain
  operates in binary, then would that would imply that mathematics is an
  all-encompassing complete system? That the universe is deterministic?
</p>
<br />
<p>
  In 1900, mathematician David Hilbert listed the most important unproven
  mathematical questions of all time. In 1930, mathematician Kurt Godel proved
  that one of these questions was impossible to answer. The world
  <i>cannot</i> be explained through mathematics.
</p>
<br />
<p>
  Alan Turing was intrigued by Godel's incompleteness theorem, and
  conceptualised a machine that could perform every manipulation of arithmetic –
  everything that is "computable" – and the machine he devised was the "Turing
  machine". A theorem is deemed "computable" if it can be proven by a Turing
  machine in a finite amount of time.
</p>
<br />
<p>
  Turing imagined an infinitely long tape which contained a string of cells.
  Each cell could either contain a zero or one, or it could be blank. A
  processor would read the tape and was allowed to make six simple operations on
  it: read the number in the cell, write a number in the cell, move one cell to
  the left, move one cell to the right, change the number in the square, or stop
  – this is the basis of binary operation. Essentially, by systematically
  replacing ones and zeroes, you can encode all of mathematics. There also is a
  memory where ones and zeroes can be stored, and a processor which outputs all
  the numerical results of the calculations. The Turing machine serves as the
  basis for all modern computers.
</p>
<br />
<p>
  The computer processes its information in singular units – "bits". It needs to
  process numbers more complex than ones and zeroes so it clumps the bits into
  groups of eight – "bytes". Each bit in a byte represents a specific value
  based on its place in the byte. Starting at one, each bit represents the
  previous to the power of two, until you reach 128. The byte represents the
  number of the sum of all the active (set to one) bits. The highest number it
  can represent is 255.
</p>
<br />
<p>
  The computer can understand colour in three bytes, representing the intensity
  of red, green, and blue respectively. If there are no red, green, or blue bits
  activated (00000000 00000000 00000000), the computer will understand "black".
  On the other hand, if all the bits are activated (11111111 11111111 11111111)
  then the computer will understand "white". If all the bits are equal, but at
  neither extreme, the computer will understand "grey" (01100000 01100000
  01100000). Anything else, and it will see colour.
</p>
<br />
<p>
  The computer identifies an image by a "header" (a string of bytes that
  represent the file type and various other bits of information), and then it
  knows to read the RGB data.
</p>
<br />
<p>
  You can skew an image by changing the order of the bits. You can increase
  values of the colour bits in an image and it will appear brighter. You can
  modulate the values of colour bytes according to their surrounding bytes and
  the image will appear blurred.
</p>
<br />
<p>
  Picture: you are going for a walk and you are about to turn a corner. You are
  see a street sign on the corner and that's a "header". You know that you are
  going to walk down xxx Street. You know that you are going to walk down a
  street because it says "ST", not "RD", or "AVE", or "BLVD", or "PDE", or
  anything else. But how do you know that the "ST" after the name on the street
  sign means that you are going to walk down a street? You see the letters "ST"
  and know that's an abbreviation of "street". But how are you meant to tell a
  street from your ass or your elbow? You know the characteristics of a street –
  it has a road or a footpath or both and it moves in a line. It usually looks a
  certain way so you have an image in your head for it.
</p>
<br />
<p>
  But what constitutes that image? You are standing in front of two tables. The
  table on the left is a bright green plastic kiddie table with four legs about
  a foot high. The table on the right is made of metal and painted black and
  stands on one leg, about three feet high. How do you know that they are both
  tables? They look nothing alike. I tell you to picture a "table" in your head
  and it looks completely different too. Where does the table come in? You know
  that you can put objects on it. But you can put objects on a lot of things.
  Table is an empty vessel.
</p>
<br />
<p>
  The computer knows how to process binary data thanks to its "instruction set
  architecture" (ISA). The ISA provides the processor with instructions on how
  it should interact with the data, such as memory, arithmetic, and logic
  operations. Words and letters are abstractions for ones and zeroes in the
  world of the computer. It does not know what an "operating system" or an
  "image" or a "video" is, but it can be instructed to load one up when provided
  adequate binary instructions; it thinks from the bottom, up. "operating
  system", "image", and "video" are all constructions.
</p>
<?php
$sections = makeSection("The Meaning of Meaning", $sections);
?>
<div class="content-indent">
  <p>
    Korzybski, who developed the concept of General Semantics, the ‘meaning of
    meaning’, points out that Western thought has been crippled by the
    formulations of Aristotle and Plato. We are still thinking in either/ or,
    absolute terms that don’t correspond to what we know about the human nervous
    system and the physical universe ... Korzybski would start a lecture by
    thumping a table ... ‘Whatever this may be it is not a table. It is not the
    verbal label table. We can call it anything so long as we agree that this
    object is what we are referring to.’ Take an abstract word like ‘truth’. You
    can’t see it, you can’t touch it. Everyone who uses the word has a different
    definition. Some are referring to religious truth, others to scientific
    truth, magical truth, pragmatic truth, some to a private lunacy.
    <?php
    $quote = " Everyone is talking at cross purposes.";
    $quoteNum = makeFootnote(2, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  The word "table" is not a physical table. The word is essentially a label
  which is attributed to a concept – the concept being a set of parameters. The
  label acts as a pointer to any data which falls within the parameters of the
  concept. The word is a byproduct of the Human’s "understanding" algorithm,
  serving as an abstraction – syntactic sugar, if you will.
</p>
<br />
<p>
  <?php
  $quote = "The parameters of the concept take shape through interaction with other
  concepts, and the consequent lines of association";
  $quoteNum = makeFootnote(3, $quoteNum, $quote, $url);
  ?>
  that are established. You see the letters <i>t-a-b-l-e</i> and they conjure
  the image of an elevated surface on which objects can be placed. The
  appearance of the table is dependent on your preconceived notion of a table,
  and the context in which you read the word. To some, the table may be big, to
  others it may be small; some may have a tablecloth; some may be bare; some may
  be wooden; some may be plastic... These notions all originate from all of your
  previous interactions with the concept of a table. If you have never
  encountered a table, the word will take on the meaning of the absence of its
  meaning. Each time a "table" is encountered, a new personal association, or
  connotation is annexed. Denotation is an illusion - the definition of a word
  entirely circumstantial, shaped by interaction. Alone, it is <i>empty</i>.
</p>
<br />
<p>
  Take the English alphabet: it is comprised of a relational order of twenty-six
  letters. We know that A comes before B, and Y comes before Z, and T is two
  places before V, and so on. Take away the letters and what does it mean? The
  "alphabet" has no independent meaning beyond the configuration of its
  constituent elements; there is no "meta-letter". It's an empty universe.
</p>
<br />
<p>
  Now take a looser concept such as "chair", and you see each individual "chair"
  has different individual constituents – there is no "meta-chair". The "chair"
  is ultimately defined by the sum of all agreed upon "chairs"; but on the
  individual level, everybody will agree on different a range of "chairs", and
  will have different memories and associations. Is "chair" defined by the
  physical object of the "chair", or is it defined by the idea of the chair? Is
  "chair" a feeling?
</p>
<br />
<p>
  A definition is constituted by a range of traits – you know that a chair is an
  object that serves the purpose of being an elevated object of which you can
  sit on. There are many elevated objects that you can sit on, however – you
  could say that a cushion fits this category, but you distinguish a cushion
  from a chair because it more closely fits the criteria of "cushion", and we
  generally think of "cushion’’ and "chair" as mutually exclusive. But if the
  category "cushion" didn’t exist, could what we know as a cushion be considered
  a chair?
</p>
<br />
<p>
  You put a standard desk chair next to a rock: could the rock be considered a
  chair? It <i>is</i> an elevated surface that you can sit on. But it feels
  rather ridiculous to call the rock a chair when there is a seemingly definite
  chair right there. You could say that a chair has the quality of making you
  instinctually gravitate towards it, as opposed to any other object, when you
  want to sit down on an elevated surface. Would you be more inclined to sit on
  the rock or the chair? Probably the chair.
</p>
<br />
<p>
  But what if you are in the woods and you want to sit on an elevated surface,
  but there are no chairs around. There is, however, a rock that is roughly the
  size and height of a standard chair. It is the closest object in your
  surroundings to a "chair" – it technically fits the criteria. Are "rock" and
  "chair" mutually exclusive? It’s not really clear. It <i>is</i> possible for a
  chair to be made out of rock. In relation to its context, the rock could
  conceivably be considered a chair.
</p>
<br />
<p>
  You take a chair and put it in an otherwise completely empty universe. Is it
  still a chair? There is nothing that could conceivably sit on it – "sitting"
  does not exist, so the essential criteria does not apply. You could say that
  definition is relative: a chair in an empty universe – relative to nothing –
  is <i>not</i> a chair; a rock next to a chair is probably not a chair; a rock
  outside the vicinity of chairs could potentially be considered a chair if it
  fits certain criteria.
</p>
<br />
<p>
  If I, alone, decide that an object fits my concept of a chair, then it is a
  chair in relation to me. If we both mutually agree that an object is a chair,
  then it is a chair in relation to us. If we disagree as to whether or not an
  object is a chair, then it may or may not be a chair in relation to us. If the
  majority of people in a group agree that an object is a chair, then it is most
  likely a chair in relation to them.
</p>
<br />
<p>
  But if we both agree that an object is a chair, is really
  <i>it one hundred percent</i> a chair? Well, there are potentially still
  people out there who would disagree. You can’t say that it is
  <i>definitely</i> a chair, but relative to its surroundings, the object is
  still a chair – there is just a small possibility that it’s not.
</p>
<br />
<p>
  We know that we all have different ideas of what "chair" means, but is anyone
  <i>actually correct?</i> An object may be a chair to one individual, but it
  may not be a chair to another. But are there certain criteria that everyone
  would <i>definitely</i> agree on? One individual’s definition may be closer to
  the <i>collective</i> idea of a chair – the sum of every individual idea of a
  chair in the universe – than another, but everybody is
  <i>technically</i> correct in relation to themselves. In a group, you are a
  degree of correct in relation to the collective idea of the group.
  Universally, you are a degree of correct in relation to the collective idea of
  Everyone.
</p>
<br />
<p>
  The idea of a chair differs in relation to your location. How are you supposed
  to know <i>everybody</i>’s idea of a chair? You can’t read the entire concept
  of a chair in everybody’s mind – you can only approximate, and it is easier to
  approximate when somebody is in your vicinity, trying to tell you their
  concept of a chair. Outside of that, you can only know that there are likely
  people out there with different ideas, but you don’t have as many hints as to
  what exactly those diferent ideas are. In other words, ideas closer to you
  will have more influence than those further away.
</p>
<br />
<p>
  It seems that both everybody and nobody is correct – it could be said that
  ultimate criteria is that all parties agree that <i>this</i> describes
  <i>that</i>.
</p>
<br />
<p>
  Where does "yellow" stop and "orange" begin? The Machine establishes a set of
  parameters and draws a line. Say that one Machine is programmed to draw the
  line here, and another Machine to draw the line there - their personal
  parameters will be different. With no means of communication between the two,
  they have no way of knowing where the other set their parameters. All that it
  can do is collect a database of orange-yellow data and draw its line at the
  median.
</p>
<br />
<p>
  In order to syncronise their definitions, you must establish a line of
  communication. You can do this via internet or USB transfer, or written or
  spoken word. Or you can play God and act as a telepathic signal by copying it
  line-for-line yourself.
</p>
<?php
$sections = makeSection("The Wave Pool", $sections);
?>
<p>
  You light a match and the coolest part of the flame at the top is red, and at
  the center, the flame is yellow. If the conditions are right, the warmest part
  of the flame at the bottom will be illuminated in blue. See the Rayleigh-Jeans
  catastrophe: physicists could not figure out why this happened.
</p>
<br />
<p>
  They knew that heat is the product of atoms in motion, and that atoms have
  electrical charges; if a charged atom is moved fast enough, it exudes
  electromagnetic radiation, like radio or light – the colour of the flame
  indicates the frequency of the radiation. In the case of the flame, they found
  something that entirely broke the deterministic laws of physics: the energy
  emitted by an atom can become <i>infinite</i> at high enough frequencies. The
  mechanism of the flame is <i>not computable</i>.
</p>
<br />
<p>
  Max Planck put this problem to rest with the discovery that atoms do not, in
  fact, emit a continuous stream of energy, but tiny packets of energy
  ("quanta") that form an oscillation. That oscillation quite resembles a
  <i>wave</i>. Planck calculated the size of the quanta as approximately 6.626 ×
  10<sup>-34</sup> joule-seconds: "Planck's Constant", or <i>h</i>.
</p>
<br />
<p>
  If <i>h </i>= 0, we are living in the Machine; but if <i>h</i> gets larger,
  something else emerges...
</p>
<br />
<p>
  The electron resonates in distinct frequencies in its cycles around the
  nucleus of the atom, thus each individual from of matter has its own
  frequency. With Planck's Constant, you can traverse the periodic table and
  calculate the precise frequency that emanates from every individual element;
  each individual particle in the universe.
</p>
<br />
<p>
  Beyond the deterministic world lies the <i>quantum</i> world… Now, out here,
  particles exist as <i>waves</i>…
</p>
<br />

<p>
  Consider: Schrodinger's cat is in a sealed box in which poison gas could be
  released at any moment – you do not know whether it is dead or alive. You
  observe the closed box: to your perception, what lies within its walls is the
  sum of all its potential states. In a sense, it is simultaneously both dead
  and alive until you open the box and observe it. In the world of quantum
  physics, this is referred to as "superposition"… See that you simultaneously
  <i>did</i> and <i>didn’t</i> leave that pot on the boil before you left the
  house…
</p>
<br />
<p>
  The question of whether you did or didn’t turn off the stove cannot be
  resolved as a binary, "yes" or "no", answer until you go and observe it;
  obtaining the required data to make the conclusion. The best that you can do
  in terms of binary categorisation of the situation is to create the question
  "Am I sure that I turned the stove off?", where you can apply a yes or no
  answer, but this question is an abstraction. The stove itself is still in
  superposition.
</p>
<br />

<p>
  Observe a key difference between the human and the computer: the computer
  cannot go and seek data or pose its own questions – it must wait for input and
  direction.
</p>
<br />

<p>
  Now say that you arrive outside your house and you can smell something
  burning. It now seems more likely that you did, in fact, leave the stove on.
  You are still not sure, though – maybe something else is burning. But you see
  another factor in the equation – because of that smell, the likelihood of the
  stove being left on increases. Say you had also forgotten various other things
  that day, making it more likely that you forgot to turn the stove off, too.
  You could go on forever listing all the different factors, but the point is
  that they all collectively constitute the superposition equation. You can
  visualise it like a wave pool – each possibility an individual ripple, some
  large, some small.
</p>
<br />
<p>
  See the wave form in action: you are tossing rocks into a pond, and from each
  rock the water ripples out. The rocks sink to the bottom of the pond, but the
  ripples expand and intefere with one another – muting and amplifying. The
  ripples form an <i>interference pattern</i>…
</p>
<br />
<p>
  The "burning smell" ripple is looking pretty big, so it looks likely that you
  left the stove on…
</p>
<br />
<p>
  The quantum wave function is demonstrated best by the "double slit"
  experiment: you have two parallel sheets of paper and the first sheet has two
  small slits. You shine a photon (light particle) beam through the slits and
  now a wavelike pattern has appeared on the second sheet behind it. As the
  waves pass through the slits, they serve to amplify and cancel each other out,
  creating interference patterns, like the ripples on the water.
</p>
<br />
<p>
  You replace the photon beam with an electron (matter particle) beam and the
  electrons make the same interference pattern as the photons. You send through
  one singular electron, and the effect is the same: it has somehow traveled
  through both slits simultaneously – existing in two places at once.
</p>
<br />
<p>
  Note that this experiment only works if the particles are not being observed
  as they travel from the beam to the second sheet of paper.
</p>
<br />
<p>
  The particles appear on the second sheet as the collective sum of all their
  potential positions – a wave pattern, most concentrated at the points where
  the particles would most likely land. The singular particle went through both
  slits at once because it had a chance of going through either. If the world
  were deterministic, the particles all would’ve traveled through either one
  slit or the other – regardless of whether they were under observation or not.
</p>
<br />
<p>
  In order for the particles to pass through one slit or the other – for the
  wave to "collapse" – an observer is required. The physical world, as we know
  it, requires a conscious observer in order for it to manifest. The
  consciousness collapses the wave pool of probability into a "fact". "This" or
  "that" – "true" or "false"…
</p>
<br />
<p>
  Subatomic particles (such as photons and electrons) have a "dual" quality:
  they can exist in both <i>physical</i> form, and <i>wave</i> form.
</p>
<br />
<p>
  When light hits an object, it is capable producing a physical effect by
  knocking out an electron – this is known as the "photoelectric effect".
</p>
<br />
<p>
  Albert Einstein explained the photoelectric effect using Planck’s theory: he
  proposed that light occurs in quanta of energy, and these quanta constitute
  the "light particles" we now know as protons. This brought about the concept
  of "duality" – that light possesses a dual quality, being able to act as
  either particle (physical) or wave (energy).
</p>
<br />
<p>
  Now, recall the double slit experiment: both the photons and the electrons
  fired through the slits exhibited identical behavior, acting as waves. This
  proved that electrons, too, possess duality; in fact, every particle in the
  universe does.
</p>
<br />
<p>
  Every particle in the universe emanates a frequency, which oscillates within
  the bounds of <i>h.</i>
</p>
<br />

<p>
  The unobserved particle exists as a wave – you could call it a "vibration" of
  sorts. It is generally suggested that wave constitutes the probability of
  finding said particle.
</p>
<br />
<p>
  The rock in the grass echoes out in quanta waves all the way to Mars, and
  across the universe. The wave that reaches Mars is almost impossibly small, so
  it is almost impossible for the rock to manifest there.
</p>
<br />
<p>
  The atom vibrates out across the void – colliding, muting, amplifying… – how
  do you know the distance between a table and a street sign? <i>h</i> to the
  power of what?
</p>
<br />
<p>
  You’re reading a book and you see a word that you don’t know the meaning of.
  By "not knowing the meaning", I actually mean that you decided that you don’t
  know the meaning. Where’s the line that separates knowledge and not-knowledge?
  Well, that’s a rather personal question. You know some things about the word
  because you saw it in a particular context. The word communicates like a radio
  and you are getting a few faint voices in the static, but you are not quite
  tuned into its station. The Word waves closer to the people who "know", and
  those who "know" wave back. The Word is shaped by the people it interferes
  with and the people are shaped by the Word they interfere with.
</p>
<?php
$sections = makeSection("The Gateway Revisited", $sections);
?>
<div class="content-indent">
  <p>
    "[The] "holographic model" marries brain research to theoretical physics; it
    accounts for normal perception and simultaneously takes the paranormal and
    transcendental experiences out of the supernatural by explaining them as a
    part of nature.
  </p>
  <br />
  <p>
    <?php
    $quote = "Like certain strange discoveries of quantum physics, the radical
      reorientation of this theory suddenly makes sense of paradoxical sayings of
      mystics throughout the ages.\"";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  Look out into the street and tell me who’s got a metallic belt buckle under
  their shirt, or whos got a machete in their bag – tell me everybody who’s
  wearing a metallic ring, or glasses, or some kind of concealed recording
  apparatus... I bet you can’t. But you go through airport security and a
  machine is somehow able to detect any metallic objects on your person with
  complete accuracy, seemingly without even touching you. It appears like magic
  (some would say that it is) – there is some kind of invisible force at play
  here, and that invisible force is the "magnetic field".
</p>
<br />
<p>
  Now for another trick: go and rub a balloon on your or somebody’s hair – it
  sticks like a magnet and makes your fingers tingle, but you can’t actually see
  what’s making it do that. This is the "electric field". Now, if you look at a
  compass during a nearby lightning storm, and you will see the magnetic needle
  deflect with each nearby strike. It turns out that these two forces are
  actually one entity known as the "electromagnetic field".
</p>
<br />
<p>
  The electromagnetic field is what comprises telephone waves, radio waves, and
  wireless internet – all invisible forces with very tangible effects, vibrating
  around, on, across, and through you all the time.
</p>
<br />

<p>
  I would now like to further explore the "Gateway" report I mentioned in
  section 1.
</p>
<br />
<p>So, let us begin.</p>
<br />
<div class="content-indent">
  <p>
    <?php
    $quote = "The first point which needs to be made is that the two terms, matter and
    energy tend to be misleading if taken to indicate two distinctly different
    states of existence in the physical world that we know it.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  <?php
  $quote = "The universe is comprised of atoms, and atomic structure is comprised of
  oscillating energy grids, surrounded by other oscillating energy grids, which
  orbit at extraordinarily high speeds. All solid matter, at the base level, is
  simply energy – every particle we percieve as physical matter can be traced to
  a distinct frequency and amplitude; ";
  $quoteNum = makeFootnote(4, $quoteNum, $quote, $url);
  ?>
  the nucleus of an atom vibrates at 10<sup>22</sup>
  Hertz, a molecule vibrates at 10<sup>9</sup>, a live human cell vibrates at
  10<sup>3</sup>…
  <i>Solid matter, in the traditional sense, does not actually exist</i>.
</p>
<br />
<p>
  But you may ask: why do we experience the world as physical, then? Why can’t
  we see TV and radio waves?
</p>
<br />
<div class="content-indent">
  <p>
    <?php
    $quote = "Energy creates, stores and retrieves meaning in the universe by projecting
    or expanding at certain frequencies in a three dimensional mode that creates
    a living pattern called a hologram.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  The laser produces the <i>purest</i> kind of light – a disciplined stream of
  energy with total coherence of frequency and amplitude. It contains billions
  of times the concentrated energy found on a similar area of the sun.
</p>
<br />
<p>
  When you shine a coherent light source, such as a laser beam, through an
  interference pattern – a wave pool of energy – it produces a three-dimensional
  image that can be recorded on a photographic plate – this is known as a
  <i>hologram</i>.
</p>
<br />
<p>
  The suggestion is that what we "see" is simply light reflecting off
  interference patterns – said light being the energy of the brain; the brain
  being an energy field, just as all other matter. The brain serves to filter
  wave frequencies down to that which can be understood in three dimensions, and
  this is where we get the impression of "physical" matter. The energy of the
  brain illuminates the field of perception.
</p>
<br />
<p>
  The energy patterns of the human brain in an ordinary state bear much more
  resemblance to an ordinary lamp than a laser: expending a chaotic, incoherent
  stream of energy, diffused over a wider area of limited depth – this would
  appear to account for our limited depth of perception.
</p>
<br />
<p>
  Under ordinary circumstances, the range of the human awareness is dispersed
  haphazardly throughout its general vicinity – you’re aware of your
  surroundings but your attention is not particularly focused on one thing or
  another. Say you’re going for a walk and just taking it in as it comes – mind
  wandering, minimal exertion of effort… You observe a tree as you walk by,
  impervious and glassy-eyed – it doesn’t seem any more important than the last
  one, or the one before that…
</p>
<br />
<p>
  Now, when you focus your attention on one particular thing – say you’re
  reading a book, a particularly interesting one: your perception zeroes in and
  you begin to exert some effort, trying to take in as much as you can – the
  words taking on more importance than seemingly anything else in the world at
  that point in time. You lose awareness of everything else in your vicinity –
  your field of awareness narrows; the chair or bed you’re sitting or lying in
  no longer has any significance, nor does whether you’re sitting, or lying, or
  standing, or whatever position you may be in. You can envision it like the
  focusing of a camera lense.
</p>
<br />
<p>
  This mechanism can be seen most clearly in "altered" states of awareness.
  Transcendental states are known to bear the characteristic of
  "single-mindedness", which can be much likened to the laser. Conversely, the
  brain on psychedelics lights up like a Christmas tree. A heightened state of
  focus, and an expansion of the perception can be observed. A near-universally
  reported characteristic of psychedelic states is a sense of becoming "one"
  with one’s surroundings, and further, everything in the universe at once. In
  heavy psychedelic states, one experiences an "ego death" where all sense of
  individuality is disintegrated. This directly coincides with the heightened
  frequency of the brainwaves.
</p>
<br />
<p>
  Essentially, the more coherent the brainwaves, the more concentrated and
  focused the perception; and the higher the frequency of the brainwaves, the
  wider the area of perception.
</p>
<br />
<p>
  The human mind is, itself, a hologram which attunes to the universal hologram
  via exchange of energy. This attunement and exchange of energies allows us to
  deduce meaning and achieve a state of "consciousness".
</p>
<br />
<div class="content-indent">
  <p>
    The universe is composed of interacting energy fields, some at rest and some
    in motion. It is, in and of itself, one gigantic hologram of unbelievable
    complexity. 
    <?php
    $quote = " According to the theories of Karl Pribram, a neuroscientist at
    Stanford University and David Bohm, a physicist at the University of London,
    the human mind is also a hologram which attunes itself to the universal
    hologram by the medium of energy exchange thereby deducing meaning and
    achieving the state which we call consciousness.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  When energy is "percieved" by the human mind, the information that is conveyed
  is processed via a process of "atunement". Essentially, the input of data is
  percieved and understood to the extent that it is operating at a frequency and
  amplitude that the brain can harmonise with. This allows the mind to "read"
  the energy passing through it.
</p>
<br />
<p>
  The mechanism is much like that of a radio tuning into different stations. The
  configuration of the mind, characterised variances in frequency and amplitude,
  determines the configuration, thus the character, of the receiver – or the
  station you’re tuned into. The default station the human brain is tuned into
  tuned to is that of the three-dimensional.
</p>
<br />
<div class="content-indent">
  <p>
    Changes in the frequency and amplitude of the electrostatic field which
    comprises the human mind determines the configuration and hence the
    character of the holographic energy matrix which the mind projects to
    intercept meaning directly from the holographic transmissions of the
    universe. Then, to make sense of what the holographic image is "saying" to
    it, the mind proceeds to compare the image just received with itself.
    <?php
    $quote = " Specifically, it does this by comparing the image received 
    with that part of its own hologram which constitutes memory.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  Another way to envision this process by picturing the input of energy with a
  three-dimensional grid superimposed upon it, filtering out all that cannot be
  described in terms of three-dimensional geometry.
</p>
<br />
<p>
  When faced with an influx of data, the mind proceeds to compare the content it
  received with the contents of its memory bank: by registering differences in
  frequency, a meaning is ultimately deducted. The way in which this comparison
  is performed involves mathematically reducing the three-dimensional data down
  to two dimensions. This allows the brain to perform binary comparisons, much
  in the manner of the computer, and inevitably reach some conclusion along the
  lines of "yes/no" or "do/don’t" – and this is the point at which the wave
  collapses.
</p>
<br />
<p>
  The idea is introduced that we perceive only difference, and the "out-there"
  information we receive is systemised and processed in a definite binary
  format. There is no clean line between <i>this</i> or <i>that</i> in the Other
  World, so the brain imposes handy distinctions.
</p>
<br />
<p>
  In expanded states of consciousness, it can be observed that the right brain
  takes the lead. It is suggested that the right brain acts as the primary
  receiver, taking in three dimensional holographic images and reducing them to
  two-dimensional binary data for the left brain to process. The left brain
  operates much like the Turing machine (it was the blueprint, after all) and
  serves to sort input from the right hemisphere into symbols and concepts,
  creating the "definition" and "sense" that we all know and love.
</p>
<?php
$sections = makeSection("Infinity and Interference", $sections);
?>
<p>
  Physicists define time as a measurement of change – energy or force in motion.
  In order for energy to be in motion, it must be confined to a specific
  location which can be distinguished from other locations. Space is, thus, born
  from these differentiations – when energy is not confined, it becomes
  infinite.
</p>
<br />
<p>
  There is no differentiation between "here", or "there", or "this", or "that"
  in infinity because there are no boundaries, thus it is outside the dimension
  of space. Since it is outside the dimension of space, motion is not possible,
  placing it outside the dimension of time.
</p>
<br />
<div class="content-indent">
  <p>
    Energy in infinity means energy uniformly extended without limit. It has no
    beginning, no end, no location. It is conscious force, the fundamental,
    primal power of existence without form, a state of infinite being. Energy in
    infinity is said to be completely at rest and, therefore, cannot generate
    holograms so long as it remains utterly inactive. It retains its inherent
    capacity for consciousness in that it can receive and passively perceive
    holograms generated by energy in motion out in the various dimensions which
    make up the created universe but it cannot be perceived by consciousness
    operating in the active universe. Energy in this state of inactive infinity
    is termed by physicists as energy in its absolute state, or simply "the
    Absolute."
    <?php
    $quote = " Between the Absolute and the \"material\" universe in which we
    experience our physical existence are various intervening dimensions to
    which human consciousness in altered states of being may gain access.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>
  Tune <i>h</i> to zero, and you get the Machine, the dead automaton. Turn
  <i>h</i> all the way up, and you get the Absolute, the infinite consciousness,
  Huxley’s Mind at Large, the Dharma-Body of the Buddha…
</p>
<br />
<p>
  Divide it into quanta and you get the individual – the Human consciousness.
</p>
<br />
<p>
  When energy or force is in motion, it creates an interference pattern. Now, I
  want to raise the question: does the wave constitute "potential", or just
  interference? Is there a difference between interference and potential? The
  closer the waves, the more interference, the closer in proximity – like
  echo-location, you dig?
</p>
<br />
<p>
  Did John Doe from Detroit just buy a new TV because his old one got water
  damage from a leak in the roof? Maybe, how should I know? I don’t know
  anything about John Doe or his TV or his roof, and I’m nowhere near Detroit.
  The vibrations of John’s TV are not in my proximity. Faint whisper from the
  static: "John Doe might exist, and it is possible that he just bought a TV."
</p>
<br />
<p>
  Did John Doe from Dertoit just buy a new TV because his dog threw a brick at
  it? I don’t think so. I still don’t know anything about John Doe or his dog,
  and I’m still nowhere near Detroit, but I would say that probably didn’t
  happen because I have never seen or heard of a dog that is capable of throwing
  a brick. Static: "Yeah, I don’t think dogs can do that."
</p>
<br />
<p>
  You hear a noise at the door that sounds like your cat wanting to come inside.
  Does your cat want to come inside? Probably – you know that you have a cat and
  it often wants so come inside, and that’s usually what it sounds like,
  although you still can’t be 100% certain until you open the door. Static: "The
  thing at the door sounds a lot like your cat, you should let it in."
</p>
<br />
<p>
  I tell you that I just got a new fridge magnet. Do you know if I got a new
  fridge magnet? Not for certain, but you don’t see any reason why I would lie
  about something like that. And say I did, in fact, get a new fridge magnet.
  Did I just amplify the waves of the fridge magnet by giving you the idea of
  it? The idea of the magnet is a vibration and I just gave you an approximation
  of that vibration and you just approximated my approximation of that
  vibration. We are now collectively creating the concept of my fridge magnet.
</p>
<br />
<p>
  I am sitting in a chair. Am I sitting in a chair? Yes, I know that I am
  sitting in a chair because I am sitting on it. Its vibrations are directly
  interacting with mine, and I can deduce from the interaction that I am sitting
  on a "chair". I am a rock, and it is my pond.
</p>
<br />
<p>
  Do I know where your car is? No, because I can’t see or hear it, and you have
  not told me where it is. Maybe it’s in your garage? How should I know? All I
  can tell that it’s not within the range of my senses.
</p>
<br />
<p>You tuned in? Get the picture?</p>
<br />
<p>
  The wave collapses and physical form manifests when it is observed directly by
  an individual; the individual can only attune to select range of waves, which
  constitute the range of awareness. The individual further individualises these
  waves by grouping them into categories, and continues categorising down until
  you can draw solid semantic lines between <i>this</i> and <i>that</i>. Now you
  can make flat "it is so" statements, which allow you to make "do or don’t"
  decisions. By the act of observation, and consequent analysis, you have
  effectively tuned <i>h</i> from Planck’s Constant to zero.
</p>
<br />
<p>
  The difference between the living consciousness and the Machine is that the
  Machine cannot <i>observe</i> – it is a fully enclosed system. The human must
  plug it into a power source, feed it information, and give it directions in
  order for it to function.
</p>
<br />
<p>
  The Machine cannot percieve on its own, the human must perceive for it. It
  cannot dream or create on its own – it has no line of communication with the
  outside world; no knowledge of it surroundings. All the Machine "knows" is its
  own self-contained realm – nothing beyond the pre-encoded binary contents of
  its hard drive. The human can seek knowledge, formulate new ideas, but the
  Machine cannot. The Machine lives in the dimension where <i>h</i> = 0.
</p>
<br />
<p>That is the essential distinction.</p>
<br />
<p>
  The computer is an artificial imitation of the sense-making mechanism of the
  brain – nothing more. The infinite world "out there" is the infinite
  calculation that stumped the Turing machine, the frontier of dreams, the
  playground of the imagination...
</p>
<br />
<p>
  In the words of Burroughs: w<i
    >e are not setting out to explore preexisting data</i
  >.
</p>
<?php
$sections = makeSection("Self-Awareness", $sections);
?>
<div class="content-indent">
  <p>
  Humans not only know, but they know that they know. They are able to monitor the process of their own thinking and maintain an awareness of it.
<?php
  $quote = " Moreover, they can conduct a comparitive assessment, evaluating the functioning of their thought processes against various \"objective\" standards they have adopted. Human consciousness can do this because it has the capacity to duplicate aspects of its own hologram, project them out, \"perceive\" that projection, put it through comparison with the memory aspect(where its evaluation standards of measure are stored) of its own hologram, and measure or \"sense\" the differences using three dimensional geometry and then binary \"go/no go\" pulse to yield verbal cognition about the self.";
    $quoteNum = makeFootnote(1, $quoteNum, $quote, $url);
    ?>
  </p>
</div>
<br />
<p>How does one become many?</p>
<br />
<p>You have one Absolute self-aware Thing. In order to have a concept of <i>self</i>, there must be a <i>not-self</i> to juxtapose it with. This juxtaposition creates two Things: Self, and Not-Self.</p>
<br />
<p>You have one Thing, and you divide it in two. You juxtapose Thing, 1 and Thing 2, and that juxtaposition forms a third Thing. You juxtapose thing 1, 2, and 3, and you get a forth. You juxtapose 1, and 3; 4, 6, and 8; 2, 9, and 36... The juxtapositions can be formed in any number of ways until you have infinite juxtapositions - infinite nodes in a universal network.</p>
<br />
<p>When focus is directed to particular areas of the network, more nodes are concentrated in that particular area, and this forms a cluster. Say that when the Absolute is divided, its self-awareness is divided with it. When a cluster forms, the cluster as a whole forms an individual sense of self that is the juxtaposition of Cluster and Not-Cluster.</p>
<?php
$sections = makeSection("The Quantum Man-Machine", $sections);
?>
<p>
  The Turing Machine was created in order to determine whether our world can be
  encapsulated by mathematics. If this is the case, then it should, in theory,
  be capable of capturing and simulating reality in its entirety with absolute
  accuracy. So, can it?
</p>
<br />
<p>
  The air inside an empty glass bottle contains 10<sup>23</sup> atoms. In order
  to simulate these atoms, you would need 10<sup>23</sup> bits, which is already
  outside the scope of any binary computer we have today, and likely ever will.
  Moreover, the atom is not a single point of data – you would also need to
  calculate the positions and velocity of the atoms. Take a boiling kettle, and
  that introduces temperature, and a whole array of new factors.
</p>
<br />
<p>
  You try to simulate the whole universe in binary, and the computer is bigger
  than the universe itself. It turns out that the smallest object that can
  simulate the universe <i>is</i> the universe.
</p>
<br />
<p>Now, dig the Quantum Turing Machine…</p>
<br />
<p>
  The traditional computer operates on transistors which constitute bits, but
  the quantum computer operates on atoms – the very raw materials of the
  universe itself – which constitute "qubits".
</p>
<br />
<p>
  The qubit remains in the superposition wave-pool of qubits until it is
  evaluated. It will, only then, spit out a one or a zero.
</p>
<br />
<p>
  To simulate the atoms in the glass bottle, you would need 10<sup>23</sup> qubits. No
  more, no less. The quantum computer that can simulate the universe
  <i>is</i> the universe.
</p>
<br />
<p>
  The number of processors in the universal quantum computer is the number of
  observers. The observers evaluate the world from electromagnetic field, to 3D
  – from wave, to body and idea. From yes <i>and</i> no, to yes <i>or</i> no.
</p>
<br />
<p>
  Do you drive to the supermarket – yes or no? Do you scratch your face – do or
  don’t? Are you in motion or are you at rest – true or false? Are you going to
  get something to eat – one or zero? Did John buy a new TV – who the hell is
  John?
</p>
<?php
$footnotes = array(
  "Wayne M. McDonnell, <i>Analysis and Assessment of Gateway Process</i>.",
  "William S. Burroughs, \"On Coincidence\", <i>The Adding Machine</i>.",
"I elaborate on the \"lines of association\" concept in my essay, <i>CUT SCRAMBLE REDIRECT</i>.",
"It can be noted that this serves as the basis of String Theory.",
);
makeFootnotes($footnotes, $url);
?>
