<!DOCTYPE html>
<html>
<head>
    @include('includes.head')  
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('includes.header')
        @include('includes.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('includes.default_content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.3
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>

        @include('includes.controll_sidebar')    
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    @include('includes.javasfileconnect')  
</body>
</html>
