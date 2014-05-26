<div id="modal" style="display: none;" class="modal-example-content">
    <div class="modal-example-header">
        <button id='close-modal' type="button" class="close" onclick="$.fn.custombox('close');">&times;</button>
        <h4>jQuery Custombox</h4>
    </div>
    <div class="modal-example-body">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
<nav class="navbar-fixed sb-slide">
    <!-- Left Control -->
    <div class="sb-toggle-left navbar-left">
        <div class="navicon-line"></div>
        <div class="navicon-line"></div>
        <div class="navicon-line"></div>
    </div>
    <!-- /.sb-control-left -->
    <a href="<% URL::route('home') %>">
        <div class="logo">
            <div>fo<span>to</span></div>
        </div>
    </a>

    <a id="upload-icon-link" href="<% URL::to('upload') %>"><img src="../img/upload.png" id="upload-icon" alt=""></a>

</nav>