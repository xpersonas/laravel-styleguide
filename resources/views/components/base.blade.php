<div class="simple-styleguide--site-styles">
    <div class="site-styles--shortcuts">
        <div class="simple-styleguide-menu-group common">
            @if($basics)
                <strong>Default patterns:</strong>
                <ul class="simple-styleguide--jump-nav">
                    @if($basics->headings)
                        <li><a href="#headings">headings</a></li>
                    @endif

                    @if($basics->text)
                            <li><a href="#text">text</a></li>
                    @endif

                    @if($basics->lists)
                            <li><a href="#lists">lists</a></li>
                    @endif

                    @if($basics->blockquote)
                            <li><a href="#blockquote">blockquote</a></li>
                    @endif

                    @if($basics->rule)
                            <li><a href="#rule">rule</a></li>
                    @endif

                    @if($basics->table)
                            <li><a href="#table">table</a></li>
                    @endif

                    @if($basics->breadcrumbs)
                            <li><a href="#breadcrumbs">breadcrumbs</a></li>
                    @endif

                    @if($basics->forms)
                            <li><a href="#forms">forms</a></li>
                    @endif

                    @if($basics->buttons)
                            <li><a href="#buttons">buttons</a></li>
                    @endif
                </ul>
            @endif

            @if($patterns)
                <strong>Custom patterns:</strong>
                <ul class="simple-styleguide--jump-nav">
                    @foreach($patterns as $pattern)
                        <li><a href="#pattern--{{$pattern['id']}}">{{$pattern['title']}}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    {{--========================================================================================================--}}
    {{--========================================================================================================--}}
    {{--========================================================================================================--}}

    <div class="sections">
        @if($colors)
        <a name="colors"></a>
        <h3 class="simple-styleguide--sectionhead">styleguide colors</h3>
        <div class="simple-styleguide">
            <div class="simple-styleguide--colors">
                @foreach($colors as $color)
                    <div class="simple-styleguide--color">
                        <div class="simple-styleguide--color--block lust" style="background-color: {{$color['hex']}}"></div>
                        <div class="simple-styleguide--color--swatch">
                            <span class="simple-styleguide--color--swatch--class"><label>class:</label> {{$color['class']}}</span>
                            <span class="simple-styleguide--color--swatch--values"><label>values:</label> {{$color['hex']}} | rgb({{$color['rgb']}})</span>
                            <span class="simple-styleguide--color--swatch--usage">{!! $color['description'] !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        {{--========================================================================================================--}}
        {{--========================================================================================================--}}
        {{--========================================================================================================--}}

        @if(!empty($basics))
            @if($basics->headings)
                <a name="headings"></a>
                <h3 class="simple-styleguide--sectionhead">headings</h3>
                <div class="simple-styleguide">
                    <div class="calculate">
                        <h1 class="measure">H1 Heading</h1>
                        <h1>H1 Heading With<br>Broken Text</h1>
                        <h1>H1 Heading <a href="/">With Linked</a> Text</h1>
                        <span class="info"></span>
                    </div>
                    <hr>
                    <div class="calculate">
                        <h2 class="measure">H2 Heading</h2>
                        <h2>H2 Heading With<br>Broken Text</h2>
                        <h2>H2 Heading <a href="/">With Linked</a> Text</h2>
                        <span class="info"></span>
                    </div>
                    <hr>
                    <div class="calculate">
                        <h3 class="measure">H3 Heading</h3>
                        <h3>H3 Heading With<br>Broken Text</h3>
                        <h3>H3 Heading <a href="/">With Linked</a> Text</h3>
                        <span class="info"></span>
                    </div>
                    <hr>
                    <div class="calculate">
                        <h4 class="measure">H4 Heading</h4>
                        <h4>H4 Heading With<br>Broken Text</h4>
                        <h4>H4 Heading <a href="/">With Linked</a> Text</h4>
                        <span class="info"></span>
                    </div>
                    <hr>
                    <div class="calculate">
                        <h5 class="measure">H5 Heading</h5>
                        <h5>H5 Heading With<br>Broken Text</h5>
                        <h5>H5 Heading <a href="/">With Linked</a> Text</h5>
                        <span class="info"></span>
                    </div>
                    <hr>
                    <div class="calculate">
                        <h6 class="measure">H6 Heading</h6>
                        <h6>H6 Heading With<br>Broken Text</h6>
                        <h6>H6 Heading <a href="/">With Linked</a> Text</h6>
                        <span class="info"></span>
                    </div>
                    <hr>
                </div>
                <div class="simple-styleguide headers">
                    <h1>H1 Heading</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <h2>H2 Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <h3>H3 Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <h4>H4 Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <h5>H5 Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <h6>H6 Heading</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                </div>
            @endif

            @if($basics->text)
                <a name="text"></a>
                <h3 class="simple-styleguide--sectionhead">text</h3>
                <div class="simple-styleguide">
                    <p><strong>Normal text:<br></strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et
                        mi. Pellentesque ac dictum ante. Fusce dignissim tempor elementum. Ut dignissim convallis eros,
                        viverra luctus lacus consequat ac. Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta
                        tortor. Nam auctor dui a neque iaculis in aliquam erat viverra. Duis orci nunc, lacinia in malesuada
                        et, euismod id turpis. Cras mattis vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet
                        massa est.</p>
                    <p>Vivamus pretium placerat lorem, in tempor massa convallis sit amet. Aliquam sed quam eget ligula
                        luctus aliquam sed vitae nulla. Aliquam dui dolor, ullamcorper eget rutrum ut, hendrerit ac lorem.
                        Donec magna est, sollicitudin vel ultrices vel, mattis ut odio. Integer vel felis laoreet purus
                        sollicitudin varius sed id ipsum. Suspendisse potenti. Praesent ut justo vitae metus luctus vehicula
                        a et purus. Suspendisse potenti. Sed viverra, quam non hendrerit laoreet, massa odio blandit arcu,
                        ac molestie metus diam eu tortor. Donec erat arcu, ultrices sit amet placerat non, feugiat in arcu.
                        Mauris eros quam, varius eget volutpat vel, tristique sed est. In faucibus feugiat urna sit amet
                        elementum. Integer consequat rhoncus libero, in molestie augue posuere et. Phasellus ac eleifend
                        magna. Proin vulputate dui ac justo pharetra consequat. In vel iaculis ligula.</p>
                    <p>Cras vestibulum lacus sit amet sem commodo ullamcorper aliquet eros vestibulum. Sed fermentum nulla
                        quis risus suscipit dapibus. Sed vitae velit ut dolor varius semper at id lectus. Aenean quis leo
                        sit amet tellus tempus cursus. Vivamus semper vehicula ante eget semper. In ac ipsum erat.
                        Suspendisse lectus erat, commodo nec fringilla quis, interdum non leo. Vivamus et lectus vitae risus
                        porta sollicitudin luctus eget est. Etiam quis elit vel est suscipit tristique. Nullam fringilla
                        purus ac velit gravida ullamcorper. Praesent porttitor ante non lacus suscipit porta. Nunc fermentum
                        sem et metus aliquam ultricies non sollicitudin nibh. Vestibulum ut ligula dolor, in placerat
                        tortor. Sed nec lacus sed nibh iaculis luctus. Pellentesque habitant morbi tristique senectus et
                        netus et malesuada fames ac turpis egestas. Curabitur rutrum, diam vel tempor commodo, augue nunc
                        viverra risus, in pellentesque neque justo eget dolor. Maecenas quis odio leo, a auctor lorem.</p>
                    <p><strong>Link:<br></strong>This is an <a href="#text">example of a link</a> within copy. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt,
                        felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Strong:<br></strong>This is an example of <strong>strong text</strong> within copy. Lorem
                        ipsum <b>bold text</b>, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Emphasis:<br></strong>This is an example of <em>emphasis placed on text</em> within copy.
                        Lorem ipsum dolor sit <i>italic text</i>, consectetur adipiscing elit. Aliquam iaculis, velit
                        gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Superscript/Subscript:<br></strong>This is an example of superscript<sup>2</sup> text and
                        subscript<sub>2</sub> text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                        iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et
                        mi. Aliquam iaculis, velit gravida convallis tincidunt, felis enim venenatis lorem, nec
                        lobortis<sup>2</sup> nisl urna et mi. Aliquam iaculis, velit gravida convallis<sub>2</sub>
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Aliquam iaculis, velit gravida
                        convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Aliquam iaculis,
                        velit gravida convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Small:<br></strong>This is an <small>example of small text</small> within copy. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt,
                        felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Link:<br></strong>This is an <a href="#text">example of a link</a> within copy. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt,
                        felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Underline:<br></strong>This is an <u>example of underlined text</u> within copy. Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis tincidunt,
                        felis enim venenatis lorem, nec lobortis nisl urna et mi.</p>
                    <p><strong>Delete:<br></strong>This is an
                        <del>example of deleted text</del>
                        within copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida
                        convallis tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi.
                    </p>
                </div>
            @endif

            @if($basics->lists)
                <a name="lists"></a>
                <h3 class="simple-styleguide--sectionhead">lists</h3>
                <div class="simple-styleguide">
                    <div>
                        <p><strong>Unordered List:</strong></p>
                        <p>Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                            odio sem nec elit. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue
                            laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Maecenas sed diam eget risus varius
                            blandit sit amet non magna.</p>
                        <ul>
                            <li class="first">lacinia</li>
                            <li>Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius blandit
                                sit amet non magna. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed
                                posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur.
                            </li>
                            <li>lobortis</li>
                            <li>lobortis</li>
                            <li class="last">erat</li>
                        </ul>
                        <p>Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                            odio sem nec elit. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue
                            laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Maecenas sed diam eget risus varius
                            blandit sit amet non magna.</p>
                    </div>
                    <div>
                        <p><strong>Ordered List:</strong></p>
                        <p>Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                            odio sem nec elit. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue
                            laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Maecenas sed diam eget risus varius
                            blandit sit amet non magna.</p>
                        <ol>
                            <li class="first">erat</li>
                            <li>eros</li>
                            <li>iaculis</li>
                            <li>in</li>
                            <li class="last">sed</li>
                        </ol>
                        <p>Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                            odio sem nec elit. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue
                            laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Maecenas sed diam eget risus varius
                            blandit sit amet non magna.</p>
                    </div>
                    <div>
                        <p><strong>Nested Lists:</strong></p>
                        <p>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla. Duis ante mi, laoreet ut,
                            commodo eleifend, cursus nec, lorem. Aenean eu est. Etiam imperdiet turpis. Praesent nec augue.
                            Curabitur ligula quam, rutrum id, tempor sed, consequat ac, dui. Vestibulum accumsan eros nec
                            magna. Vestibulum vitae dui. Vestibulum nec ligula et lorem consequat ullamcorper. Class aptent
                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus eget
                            nisl ut elit porta ullamcorper. Maecenas tincidunt velit quis orci. Sed in dui. Nullam ut mauris
                            eu mi mollis luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos hymenaeos. Sed cursus cursus velit. Sed a massa. Duis dignissim euismod quam. Nullam
                            euismod metus ut orci. Vestibulum erat libero, scelerisque et, porttitor et, varius a, leo.</p>
                        <ul>
                            <li>Item One</li>
                            <li>Item Two</li>
                            <li>Item Three
                                <ul>
                                    <li>Nested Item One</li>
                                    <li>Nested Item Two</li>
                                    <li>Nested Item Three</li>
                                </ul>
                            </li>
                            <li>Item Four</li>
                            <li>Item Five</li>
                            <li>Item Six</li>
                            <li>Item Seven
                                <ul>
                                    <li>Nested Item One</li>
                                    <li>Nested Item Two
                                        <ul>
                                            <li>Double Nested Item One</li>
                                            <li>Double Nested Item Two</li>
                                            <li>Double Nested Item Three</li>
                                        </ul>
                                    </li>
                                    <li>Nested Item Three</li>
                                </ul>
                            </li>
                            <li>Item Eight</li>
                            <li>Item Nine</li>
                            <li>Item Ten</li>
                        </ul>
                        <p>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla. Duis ante mi, laoreet ut,
                            commodo eleifend, cursus nec, lorem. Aenean eu est. Etiam imperdiet turpis. Praesent nec augue.
                            Curabitur ligula quam, rutrum id, tempor sed, consequat ac, dui. Vestibulum accumsan eros nec
                            magna. Vestibulum vitae dui. Vestibulum nec ligula et lorem consequat ullamcorper. Class aptent
                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus eget
                            nisl ut elit porta ullamcorper. Maecenas tincidunt velit quis orci. Sed in dui. Nullam ut mauris
                            eu mi mollis luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos hymenaeos. Sed cursus cursus velit. Sed a massa. Duis dignissim euismod quam. Nullam
                            euismod metus ut orci. Vestibulum erat libero, scelerisque et, porttitor et, varius a, leo.</p>
                        <ol>
                            <li>Item One</li>
                            <li>Item Two</li>
                            <li>Item Three
                                <ul>
                                    <li>Nested Item One</li>
                                    <li>Nested Item Two</li>
                                    <li>Nested Item Three</li>
                                </ul>
                            </li>
                            <li>Item Four</li>
                            <li>Item Five</li>
                            <li>Item Six</li>
                            <li>Item Seven
                                <ul>
                                    <li>Nested Item One</li>
                                    <li>Nested Item Two
                                        <ul>
                                            <li>Double Nested Item One</li>
                                            <li>Double Nested Item Two</li>
                                            <li>Double Nested Item Three</li>
                                        </ul>
                                    </li>
                                    <li>Nested Item Three</li>
                                </ul>
                            </li>
                            <li>Item Eight</li>
                            <li>Item Nine</li>
                            <li>Item Ten</li>
                        </ol>
                        <p>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla. Duis ante mi, laoreet ut,
                            commodo eleifend, cursus nec, lorem. Aenean eu est. Etiam imperdiet turpis. Praesent nec augue.
                            Curabitur ligula quam, rutrum id, tempor sed, consequat ac, dui. Vestibulum accumsan eros nec
                            magna. Vestibulum vitae dui. Vestibulum nec ligula et lorem consequat ullamcorper. Class aptent
                            taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus eget
                            nisl ut elit porta ullamcorper. Maecenas tincidunt velit quis orci. Sed in dui. Nullam ut mauris
                            eu mi mollis luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos hymenaeos. Sed cursus cursus velit. Sed a massa. Duis dignissim euismod quam. Nullam
                            euismod metus ut orci. Vestibulum erat libero, scelerisque et, porttitor et, varius a, leo.</p>
                    </div>
                </div>
            @endif

            @if($basics->blockquote)
                <a name="blockquote"></a>
                <h3 class="simple-styleguide--sectionhead">blockquote</h3>
                <div class="simple-styleguide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis, velit gravida convallis
                        tincidunt, felis enim venenatis lorem, nec lobortis nisl urna et mi. Pellentesque ac dictum ante.
                        Fusce dignissim tempor elementum. Ut dignissim convallis eros, viverra luctus lacus consequat ac.
                        Sed feugiat velit sed magna aliquam accumsan. Nam vitae porta tortor. Nam auctor dui a neque iaculis
                        in aliquam erat viverra. Duis orci nunc, lacinia in malesuada et, euismod id turpis. Cras mattis
                        vulputate erat, eget tempor magna egestas eu. Vestibulum sit amet massa est.</p>
                    <blockquote>Aliquam sed quam eget ligula luctus aliquam sed vitae nulla. Aliquam dui dolor, ullamcorper
                        eget rutrum ut, hendrerit ac lorem. Donec magna est, sollicitudin vel ultrices vel, mattis ut odio.
                    </blockquote>
                    <p>Vivamus pretium placerat lorem, in tempor massa convallis sit amet. Aliquam sed quam eget ligula
                        luctus aliquam sed vitae nulla. Aliquam dui dolor, ullamcorper eget rutrum ut, hendrerit ac lorem.
                        Donec magna est, sollicitudin vel ultrices vel, mattis ut odio. Integer vel felis laoreet purus
                        sollicitudin varius sed id ipsum. Suspendisse potenti. Praesent ut justo vitae metus luctus vehicula
                        a et purus. Suspendisse potenti. Sed viverra, quam non hendrerit laoreet, massa odio blandit arcu,
                        ac molestie metus diam eu tortor. Donec erat arcu, ultrices sit amet placerat non, feugiat in arcu.
                        Mauris eros quam, varius eget volutpat vel, tristique sed est. In faucibus feugiat urna sit amet
                        elementum. Integer consequat rhoncus libero, in molestie augue posuere et. Phasellus ac eleifend
                        magna. Proin vulputate dui ac justo pharetra consequat. In vel iaculis ligula.</p>
                    <p>Cras vestibulum lacus sit amet sem commodo ullamcorper aliquet eros vestibulum. Sed fermentum nulla
                        quis risus suscipit dapibus. Sed vitae velit ut dolor varius semper at id lectus. Aenean quis leo
                        sit amet tellus tempus cursus. Vivamus semper vehicula ante eget semper. In ac ipsum erat.
                        Suspendisse lectus erat, commodo nec fringilla quis, interdum non leo. Vivamus et lectus vitae risus
                        porta sollicitudin luctus eget est. Etiam quis elit vel est suscipit tristique. Nullam fringilla
                        purus ac velit gravida ullamcorper. Praesent porttitor ante non lacus suscipit porta. Nunc fermentum
                        sem et metus aliquam ultricies non sollicitudin nibh. Vestibulum ut ligula dolor, in placerat
                        tortor. Sed nec lacus sed nibh iaculis luctus. Pellentesque habitant morbi tristique senectus et
                        netus et malesuada fames ac turpis egestas. Curabitur rutrum, diam vel tempor commodo, augue nunc
                        viverra risus, in pellentesque neque justo eget dolor. Maecenas quis odio leo, a auctor lorem.</p>
                </div>
            @endif

            @if($basics->rule)
                <a name="rule"></a>
                <h3 class="simple-styleguide--sectionhead">rule</h3>
                <div class="simple-styleguide">
                    <p>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla. Duis ante mi, laoreet ut, commodo
                        eleifend, cursus nec, lorem. Aenean eu est. Etiam imperdiet turpis. Praesent nec augue. Curabitur
                        ligula quam, rutrum id, tempor sed, consequat ac, dui. Vestibulum accumsan eros nec magna.
                        Vestibulum vitae dui. Vestibulum nec ligula et lorem consequat ullamcorper. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus eget nisl ut elit
                        porta ullamcorper. Maecenas tincidunt velit quis orci. Sed in dui. Nullam ut mauris eu mi mollis
                        luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
                        Sed cursus cursus velit. Sed a massa. Duis dignissim euismod quam. Nullam euismod metus ut orci.
                        Vestibulum erat libero, scelerisque et, porttitor et, varius a, leo.</p>
                    <hr>
                    <p>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla. Duis ante mi, laoreet ut, commodo
                        eleifend, cursus nec, lorem. Aenean eu est. Etiam imperdiet turpis. Praesent nec augue. Curabitur
                        ligula quam, rutrum id, tempor sed, consequat ac, dui. Vestibulum accumsan eros nec magna.
                        Vestibulum vitae dui. Vestibulum nec ligula et lorem consequat ullamcorper. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus eget nisl ut elit
                        porta ullamcorper. Maecenas tincidunt velit quis orci. Sed in dui. Nullam ut mauris eu mi mollis
                        luctus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.
                        Sed cursus cursus velit. Sed a massa. Duis dignissim euismod quam. Nullam euismod metus ut orci.
                        Vestibulum erat libero, scelerisque et, porttitor et, varius a, leo.</p>
                </div>
            @endif

            @if($basics->table)
                <a name="table"></a>
                <h3 class="simple-styleguide--sectionhead">table</h3>
                <div class="simple-styleguide">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title of Employee within Company</th>
                                <th>Hire Date</th>
                                <th>Number</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>Bob Barker</td>
                                <td>Web Developer</td>
                                <td>05/19/2014</td>
                                <td>00234</td>
                                <td>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                            </tr>
                            <tr class="even">
                                <td>Pat Sajak</td>
                                <td>Concierge</td>
                                <td>02/24/2011</td>
                                <td>003455</td>
                                <td>Dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                            </tr>
                            <tr class="odd">
                                <td>Steve Harvey</td>
                                <td>Consultant</td>
                                <td>10/19/2013</td>
                                <td>43223</td>
                                <td>Eleifend vel, consequat non, dictum porta, nulla. Eleifend vel, consequat non, dictum porta,
                                    nulla. Eleifend vel, consequat non, dictum porta, nulla.
                                </td>
                            </tr>
                            <tr class="even">
                                <td>Alex Trebek</td>
                                <td>Mechanic</td>
                                <td>01/09/2016</td>
                                <td>00345234225</td>
                                <td>Dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                            </tr>
                            <tr class="odd">
                                <td>Chuck Woolery</td>
                                <td>Makeup</td>
                                <td>01/19/1978</td>
                                <td>4322343223</td>
                                <td>Eleifend vel.</td>
                            </tr>
                            <tr class="even">
                                <td>Bob Eubanks</td>
                                <td>Sales</td>
                                <td>12/09/1999</td>
                                <td>003455</td>
                                <td>Dui purus, eleifend vel, consequat non, dictum porta, nulla. Dui purus, eleifend vel,
                                    consequat non, dictum porta, nulla.
                                </td>
                            </tr>
                            <tr class="odd">
                                <td>Regis Philbin</td>
                                <td>Intern</td>
                                <td>01/19/2013</td>
                                <td>43223</td>
                                <td>Eleifend vel, consequat non, dictum porta, nulla.</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr/>
                    <p><strong>Narrow Table:</strong></p>
                    <table class="table--narrow">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title of Employee within Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td>Bob Barker</td>
                            <td>Web Developer</td>
                        </tr>
                        <tr class="even">
                            <td>Pat Sajak</td>
                            <td>Concierge</td>
                        </tr>
                        <tr class="odd">
                            <td>Steve Harvey</td>
                            <td>Consultant</td>
                        </tr>
                        <tr class="even">
                            <td>Alex Trebek</td>
                            <td>Mechanic</td>
                        </tr>
                        <tr class="odd">
                            <td>Chuck Woolery</td>
                            <td>Makeup</td>
                        </tr>
                        <tr class="even">
                            <td>Bob Eubanks</td>
                            <td>Sales</td>
                        </tr>
                        <tr class="odd">
                            <td>Regis Philbin</td>
                            <td>Intern</td>
                        </tr>
                        </tbody>
                    </table>

                    <hr/>
                    <p><strong>Long Table:</strong></p>
                    <table class="table--long">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Title of Employee within Company</th>
                                <th>Hire Date</th>
                                <th>Birthday</th>
                                <th>Favorite Color</th>
                                <th>Lucky Number</th>
                                <th>Number</th>
                                <th>Description</th>
                                <th>Random Column Heading</th>
                                <th>Random Column Heading</th>
                                <th>Random Column Heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>Bob Barker</td>
                                <td>Web Developer</td>
                                <td>05/19/2014</td>
                                <td>05/19/2014</td>
                                <td>red</td>
                                <td>7</td>
                                <td>00234</td>
                                <td>Nulla dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                            </tr>
                            <tr class="even">
                                <td>Pat Sajak</td>
                                <td>Concierge</td>
                                <td>02/24/2011</td>
                                <td>05/19/2014</td>
                                <td>yellow</td>
                                <td>7</td>
                                <td>003455</td>
                                <td>Dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                            </tr>
                            <tr class="odd">
                                <td>Steve Harvey</td>
                                <td>Consultant</td>
                                <td>10/19/2013</td>
                                <td>05/19/2014</td>
                                <td>green</td>
                                <td>7</td>
                                <td>43223</td>
                                <td>Eleifend vel, consequat non, dictum porta, nulla. Eleifend vel, consequat non, dictum porta,
                                    nulla. Eleifend vel, consequat non, dictum porta, nulla.
                                </td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                            </tr>
                            <tr class="even">
                                <td>Alex Trebek</td>
                                <td>Mechanic</td>
                                <td>01/09/2016</td>
                                <td>05/19/2014</td>
                                <td>purple</td>
                                <td>7</td>
                                <td>00345234225</td>
                                <td>Dui purus, eleifend vel, consequat non, dictum porta, nulla.</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                                <td>Random Value</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif

            @if($basics->breadcrumbs)
                <a name="breadcrumbs"></a>
                <h3 class="simple-styleguide--sectionhead">breadcrumbs</h3>
                <div class="simple-styleguide">
                    <nav class="breadcrumb" role="navigation" aria-labelledby="system-breadcrumb">
                        <h2 id="system-breadcrumb" class="visually-hidden">Breadcrumb</h2>
                        <ol>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/">Next Page</a>
                            </li>
                            <li>
                                <a href="/">Next Page</a>
                            </li>
                            <li>
                                Current Page
                            </li>
                        </ol>
                    </nav>
                </div>
            @endif

            @if($basics->forms)
                <a name="forms"></a>
                <h3 class="simple-styleguide--sectionhead">forms</h3>
                <div class="simple-styleguide">
                    <form>
                        <p>
                            <label for="example-input-email">Email address</label>
                            <input type="email" id="example-input-email">
                        </p>
                        <p>
                            <label for="example-input-number">Number</label>
                            <input type="number" id="example-input-number">
                        </p>
                        <p>
                            <label for="example-input-password">Password</label>
                            <input type="password" id="example-input-password">
                        </p>
                        <p>
                            <label for="example-input-search">Search</label>
                            <input type="search" id="example-input-search">
                        </p>
                        <p>
                            <label for="example-input-tel">Telephone number</label>
                            <input type="tel" id="example-input-tel">
                        </p>
                        <p>
                            <label for="example-input-text">Text</label>
                            <input type="text" id="example-input-text">
                        </p>
                        <p>
                            <label for="example-input-readonly">Read-only</label>
                            <input type="text" readonly value="Can't touch this!">
                        </p>
                        <p>
                            <label for="example-input-disabled">Disabled</label>
                            <input type="text" disabled value="Not available">
                        </p>
                        <p>
                            <label for="example-input-url">URL</label>
                            <input type="url" id="example-input-url">
                        </p>
                        <p>
                            <label for="example-input-color">Color</label>
                            <input type="color" id="example-input-color">
                        </p>
                        <p>
                            <label for="example-input-date">Date</label>
                            <input type="date" id="example-input-date">
                        </p>
                        <p>
                            <label for="example-input-date-time">Date / Time</label>
                            <input type="datetime" id="example-input-date-time">
                        </p>
                        <p>
                            <label for="example-input-date-time-local">Date / Time local</label>
                            <input type="datetime-local" id="example-input-date-time-local">
                        </p>
                        <p>
                            <label for="example-input-month">Month</label>
                            <input type="month" id="example-input-month">
                        </p>
                        <p>
                            <label for="example-input-week">Week</label>
                            <input type="week" id="example-input-week">
                        </p>
                        <p>
                            <label for="example-input-time">Time</label>
                            <input type="time" id="example-input-time">
                        </p>
                        <p>
                            <label for="example-input-file">File input</label>
                            <input type="file" id="example-input-file">
                        </p>
                        <p>
                            <label for="example-input-range">Range input</label>
                            <input type="range" id="example-input-range" min="1" max="4" value="3">
                        </p>
                        <p>
                            <label for="example-select1">Select</label>
                            <select id="example-select1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </p>
                        <p>
                            <label for="example-select1a">Select with size</label>
                            <select id="example-select1a" size="2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </p>
                        <p>
                            <label for="example-select2">Multiple select</label>
                            <select multiple id="example-select2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </p>
                        <p>
                            <label for="example-optgroup">Select with optgroup: Favorite Car</label>
                            <select id="example-optgroup">
                                <optgroup label="Swedish Cars">
                                    <option>Volvo</option>
                                    <option>Saab</option>
                                </optgroup>
                                <optgroup label="German Cars">
                                    <option>Mercedes</option>
                                    <option>Audi</option>
                                </optgroup>
                            </select>
                        </p>
                        <p>
                            <label for="example-optgroup2">Select with optgroup and size:Favorite Dish</label>
                            <select id="example-optgroup2" size="2">
                                <optgroup label="Vegetarian">
                                    <option>Green Salad</option>
                                    <option>French Fries</option>
                                </optgroup>
                                <optgroup label="Carnivorous">
                                    <option>Big Mac</option>
                                    <option>Roast Beef</option>
                                </optgroup>
                            </select>
                        </p>
                        <p>
                            <label for="example-optgroup3">Multiple select with optgroup: Public transport</label>
                            <select id="example-optgroup3" multiple>
                                <optgroup label="Ground">
                                    <option>Train</option>
                                    <option>Bus</option>
                                </optgroup>
                                <optgroup label="Water">
                                    <option>Ship</option>
                                    <option>Submarine</option>
                                </optgroup>
                                <optgroup label="Air">
                                    <option>Plane</option>
                                    <option>Balloon</option>
                                </optgroup>
                            </select>
                        </p>
                        <p>
                            <label for="example-textarea">Textarea</label>
                            <textarea id="example-textarea" rows="3"></textarea>
                        </p>
                        <fieldset>
                            <legend>I am legend</legend>
                            <div>
                                <input type="radio" name="option-radio" id="option-radio1" value="option1" checked>
                                <label for="option-radio1">Option one is this and that&mdash;be sure to include why it's great</label>
                            </div>
                            <div>
                                <input type="radio" name="option-radio" id="option-radio2" value="option2">
                                <label>Option two can be something else and selecting it will deselect option one</label>
                            </div>
                            <div>
                                <input type="radio" name="option-radio" id="option-radio3" value="option3" disabled>
                                <label>Option three is disabled</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>I am also legend</legend>
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1">Check me out</label>
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2">and/or check me out</label>
                        </fieldset>

                        <input type="submit" name="submit" value="Input Submit">
                    </form>
                </div>
            @endif

            @if($basics->buttons)
                <a name="buttons"></a>
                <h3 class="simple-styleguide--sectionhead">buttons</h3>
                <div class="simple-styleguide">
                    <ul class="simple-styleguide-buttons">
                        <li><a href="javascript:void(0);" class="button">Link Button</a></li>
                        <li><a href="javascript:void(0);" class="button active">Link Button Active</a></li>
                        <li><input type="button" value="Button Input" class="button"></li>
                        <li><input type="reset" value="Reset Input" class="button"></li>
                        <li><input type="submit" value="Form Submit" class="button"></li>
                        <li><button type="button" name="button">Button</button></li>
                        <li><button type="submit" name="submit2">Submit</button></li>
                        <li><button type="reset" name="reset2">Reset</button></li>
                        <li><button disabled>Cancel</button></li>
                    </ul>

                    <details>
                        <summary>View Source Code</summary>
                        <code>
                            &lt;a href="javascript:void(0);" class="button"&gt;Link Button&lt;/a&gt;<br>
                            &lt;a href="javascript:void(0);" class="button active"&gt;Link Button Active&lt;/a&gt;<br>
                            &lt;input type="button" value="Button Input" class="button" /&gt;<br>
                            &lt;input type="reset" value="Form Reset" class="button" /&gt;<br>
                            &lt;button type=&quot;button&quot; name=&quot;button&quot;&gt;Button&lt;/button&gt;<br>
                            &lt;button type=&quot;submit&quot; name=&quot;submit2&quot;&gt;Submit&lt;/button&gt;<br>
                            &lt;button type=&quot;reset&quot; name=&quot;reset2&quot;&gt;Reset&lt;/button&gt;<br>
                            &lt;button disabled&gt;Cancel&lt;/button&gt;<br>
                        </code>
                    </details>
                </div>
            @endif
        @endif

        {{--========================================================================================================--}}
        {{--========================================================================================================--}}
        {{--========================================================================================================--}}

        @if($patterns)
            @foreach($patterns as $pattern)
                <a name="pattern--{{$pattern['id']}}"></a>
                <h3 class="simple-styleguide--sectionhead">{{$pattern['title']}}</h3>
                <p>{!! $pattern['description'] !!}</p>

                {!! $pattern['pattern'] !!}

                <div class="simple-styleguide">
                    <details>
                        <summary>View Source Code</summary>
                        <pre>{!! e($pattern['pattern']) !!}</pre>
                    </details>
                </div>
            @endforeach
        @endif
    </div>
</div>

<link href="{{ asset('css/vendor/xpersonas/styleguide.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/vendor/xpersonas/styleguide.js') }}" defer></script>
