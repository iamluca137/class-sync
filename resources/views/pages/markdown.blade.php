@extends('layouts.app')

@section('contents')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Markdown
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <h1>Who's that then?</h1>
            <p>Well, she turned me into a newt. Burn her! We want a shrubbery!! Well, I got better. Listen.
                Strange women lying in ponds distributing swords is no basis for a system of government. Supreme
                executive power derives from a mandate from the masses, not from some farcical aquatic ceremony.
            </p>
            <p>Listen. <strong>Strange women lying in ponds distributing swords is no basis for a system of
                    government.</strong> <em>Supreme executive power derives from a mandate from the masses, not
                    from some farcical aquatic ceremony.</em> The swallow may fly south with the sun, and the
                house martin or the plover may seek warmer climes in winter, yet these are not strangers to our
                land.</p>
            <h2>Well, Mercia's a temperate zone!</h2>
            <p>You don't frighten us, English pig-dogs! Go and boil your bottoms, sons of a silly person! I blow
                my nose at you, so-called Ah-thoor Keeng, you and all your silly English
                K-n-n-n-n-n-n-n-niggits! A newt?</p>
            <ol>
                <li>Listen. Strange women lying in ponds distributing swords is no basis for a system of
                    government. Supreme executive power derives from a mandate from the masses, not from some
                    farcical aquatic ceremony.</li>
                <li>I don't want to talk to you no more, you empty-headed animal food trough water! I fart in
                    your general direction! Your mother was a hamster and your father smelt of elderberries! Now
                    leave before I am forced to taunt you a second time!</li>
                <li>We found them.</li>
            </ol>
            <h3>What do you mean?</h3>
            <p>Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! The Lady
                of the Lake, her arm clad in the purest shimmering samite, held aloft Excalibur from the bosom
                of the water, signifying by divine providence that I, Arthur, was to carry Excalibur. That is
                why I am your king.</p>
            <ul>
                <li>The Knights Who Say Ni demand a sacrifice!</li>
                <li>Be quiet!</li>
                <li>Bloody Peasant!</li>
            </ul>
            <p>Well, I got better. Camelot! A newt? We want a shrubbery!! The Lady of the Lake, her arm clad in
                the purest shimmering samite, held aloft Excalibur from the bosom of the water, signifying by
                divine providence that I, Arthur, was to carry Excalibur. That is why I am your king.</p>
            <p>Shut up! …Are you suggesting that coconuts migrate? I'm not a witch. Well, we did do the nose.
            </p>
            <p>Well, how'd you become king, then? Shut up! Ni! Ni! Ni! Ni! Well, Mercia's a temperate zone! I
                don't want to talk to you no more, you empty-headed animal food trough water! I fart in your
                general direction! Your mother was a hamster and your father smelt of elderberries! Now leave
                before I am forced to taunt you a second time!</p>
            <pre><code class="language-scss">$extra-colors: (
	  &quot;blue&quot;: $blue,
	  &quot;azure&quot;: $azure,
	  &quot;indigo&quot;: $indigo,
	  &quot;purple&quot;: $purple,
	  &quot;pink&quot;: $pink,
	  &quot;red&quot;: $red,
	  &quot;orange&quot;: $orange,
	  &quot;yellow&quot;: $yellow,
	  &quot;lime&quot;: $lime,
	  &quot;green&quot;: $green,
	  &quot;teal&quot;: $teal,
	  &quot;cyan&quot;: $cyan,
	  &quot;gray&quot;: $gray-600,
	  &quot;gray-dark&quot;: $gray-800,
	  &quot;dark&quot;: $dark
	) !default;
	</code></pre>
            <p>You can't expect to wield supreme power just 'cause some watery tart threw a sword at you! You
                don't frighten us, English pig-dogs! Go and boil your bottoms, sons of a silly person! I blow my
                nose at you, so-called Ah-thoor Keeng, you and all your silly English K-n-n-n-n-n-n-n-niggits!
            </p>
            <p>What do you mean? Listen. Strange women lying in ponds distributing swords is no basis for a
                system of government. Supreme executive power derives from a mandate from the masses, not from
                some farcical aquatic ceremony.</p>
            <p><img src="./static/photos/" alt="Image Alt"></p>
            <p>Well, how'd you become king, then? You can't expect to wield supreme power just 'cause some
                watery tart threw a sword at you! The Lady of the Lake, her arm clad in the purest shimmering
                samite, held aloft Excalibur from the bosom of the water, signifying by divine providence that
                I, Arthur, was to carry Excalibur. That is why I am your king.</p>
            <p>Well, I got better. Shut up! Will you shut up?! Well, I got better. I don't want to talk to you
                no more, you empty-headed animal food trough water! I fart in your general direction! Your
                mother was a hamster and your father smelt of elderberries! Now leave before I am forced to
                taunt you a second time!</p>
            <hr>
            <h1>Typographic elements</h1>
            <h2>Emphasis</h2>
            <p><strong>This is bold text</strong></p>
            <p><strong>This is bold text</strong></p>
            <p><em>This is italic text</em></p>
            <p><em>This is italic text</em></p>
            <p><s>Strikethrough</s></p>
            <h2>Blockquotes</h2>
            <blockquote>
                <p>Blockquotes can also be nested...</p>
                <blockquote>
                    <p>...by using additional greater-than signs right next to each other...</p>
                    <blockquote>
                        <p>...or with spaces between arrows.</p>
                    </blockquote>
                </blockquote>
            </blockquote>
            <p>Bloody Peasant! What do you mean? It's only a model. Well, Mercia's a temperate zone!</p>
            <p>I am your king. Shh! Knights, I bid you welcome to your new home. Let us ride to Camelot! Ni! Ni!
                Ni! Ni! Who's that then? Listen. Strange women lying in ponds distributing swords is no basis
                for a system of government. Supreme executive power derives from a mandate from the masses, not
                from some farcical aquatic ceremony.</p>
            <h2>Lists</h2>
            <p>Unordered</p>
            <ul>
                <li>Create a list by starting a line with <code>+</code>, <code>-</code>, or <code>*</code></li>
                <li>Sub-lists are made by indenting 2 spaces:
                    <ul>
                        <li>Marker character change forces new list start:
                            <ul>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                            <ul>
                                <li>Facilisis in pretium nisl aliquet</li>
                            </ul>
                            <ul>
                                <li>Nulla volutpat aliquam velit</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Very easy!</li>
            </ul>
            <p>Ordered</p>
            <ol>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
            </ol>
            <h2>Code</h2>
            <p>Inline <code>code</code></p>
            <p>Indented code</p>
            <p>// Some comments
                line 1 of code
                line 2 of code
                line 3 of code</p>
            <p>Block code &quot;fences&quot;</p>
            <pre><code>Sample text here...
	</code></pre>
            <p>Syntax highlighting</p>
            <pre><code class="language-js">var foo = function (bar) {
	  return bar++;
	}; 
	</code></pre>
        </div>
    </div>
@endsection
