<?php 
require_once "../extras/estilos.php";
require_once "../extras/barra.php"; ?>

<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <div class="row">
    <div class="col-lg-4">
        <div class="box">
            <header>
                <h5>Heading</h5>
                <div class="toolbar">
                    <span class="label label-info">
                        &lt;h1&gt;Heading 1&lt;/h1&gt;
                    </span>
                </div>
            </header>
            <div class="body">
                <h1 class="text-muted">Heading 1</h1>
                <h2 class="text-primary">Heading 2</h2>
                <h3 class="text-warning">Heading 3</h3>
                <h4 class="text-danger">Heading 4</h4>
                <h5 class="text-success">Heading 5</h5>
                <h6 class="text-info">Heading 6</h6>
            </div>
        </div>
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-8">
        <div class="box">
            <header>
                <h5>Paragraph</h5>
                <div class="toolbar">
                    <span class="label label-warning">
                        &lt;p&gt;paragraph&lt;/p&gt;
                    </span>
                </div>
            </header>
            <div class="body">
                <p>Default paragraph</p>
                <p class="lead">lead paragraph</p>
                <p class="text-muted">Muted paragraph</p>
                <p class="text-warning">warning paragraph</p>
                <p class="text-primary">primary paragraph</p>
                <p class="text-info">info paragraph</p>
                <p class="text-success">success paragraph</p>
                <p class="text-danger">danger paragraph</p>
            </div>
        </div>
    </div>
    <!-- /.col-lg-8 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Blockquotes</h5>
                <div class="toolbar">
                    <span class="label label-danger">
                        blockquotes
                    </span>
                </div>
            </header>
            <div class="body clearfix">
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id eleifend nunc. Sed
                        fringilla pellentesque consequat.
                    </p>
                </blockquote>
                <blockquote class="pull-right">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id eleifend nunc.
                        <small>Sed fringilla pellentesque consequat.</small>
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <div class="icons"><i class="fa fa-list"></i></div>
                <h5>List</h5>
                <div class="toolbar">
                    <span class="label label-default">
                        <i class="fa fa-list-alt"></i>
                    </span>
                </div>
            </header>
            <div class="body">
                <h3>Unordered</h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li class="label label-default">Consectetur adipiscing elit</li>
                    <li class="text-success">Integer molestie lorem at massa</li>
                    <li class="label label-danger">Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li class="badge badge-success">Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ul>

                <h3>Ordered</h3>
                <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                        <ul>
                            <li>Phasellus iaculis neque</li>
                            <li>Purus sodales ultricies</li>
                            <li>Vestibulum laoreet porttitor sem</li>
                            <li>Ac tristique libero volutpat at</li>
                        </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Box > Body
                    <small>10px padding</small>
                </h5>
            </header>
            <div class="body">
                <pre class="prettyprint linenums">
&lt;div class=&quot;box&quot;&gt;
 &lt;header&gt;
  &lt;h5&gt;Title&lt;/h5&gt;
 &lt;/header&gt;
 &lt;div class=&quot;body&quot;&gtContent;&lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Box > Block
                    <small>No padding</small>
                </h5>
            </header>
            <div class="block">
                <pre class="prettyprint linenums">
&lt;div class=&quot;box&quot;&gt;
  &lt;header&gt;
    &lt;h5&gt;Title&lt;/h5&gt;
  &lt;/header&gt;
    &lt;div class=&quot;block&quot;&gt;Content&lt;/div&gt;
&lt;/div&gt;</pre>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <h5>Label</h5>
                <div class="toolbar">
                    <span class="label label-default">label</span>
                </div>                
            </header>
            <div class="body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Labels</th>
                            <th>Markup</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="label label-default">Default</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-default"&gt;Default&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-success">Success</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-warning">Warning</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-danger">Danger</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-danger"&gt;Important&lt;/span&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="label label-info">Info</span>
                            </td>
                            <td>
                                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header>
                <h5>Badge</h5>
                <div class="toolbar">
                    <span class="badge">badge</span>
                </div>
            </header>
            <div class="body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Markup</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Default
                            </td>
                            <td>
                                <span class="badge">1</span>
                            </td>
                            <td>
                                <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
<?php 
require_once "../extras/footer.php";
require_once "../extras/script.php"; ?>
