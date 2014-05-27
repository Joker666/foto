<div id="promtModal" style="display: none;" class="modal-example-content">
    <div class="modal-example-header">
        <button id='close-modal' type="button" class="close" onclick="$.fn.custombox('close');">&times;</button>
        <h4>Do you want to delete this photo</h4>
    </div>
    <div class="modal-example-body">
        <% Form::open(['method' => 'delete', 'id' => 'modalDeletePhoto']) %>
        <% Form::submit('Yes', ['class' => 'btn btn-left']) %>
        <% Form::close() %>
        <a href="#" class="btn btn-right" onclick="$.fn.custombox('close');">No</a>
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