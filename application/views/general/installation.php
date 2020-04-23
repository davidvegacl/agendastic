<!DOCTYPE html>
<html>
<head>
    <title>Agendastic - Installation</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css'); ?>">

    <style>
        header {
            background: #2d3d47;
            margin-bottom: 25px;
        }

        .content {
            margin: 32px;
            max-width: 980px;
        }

        .alert {
            margin: 25px 0 10px 0;
        }

        footer {
           padding: 10px 35px;
           background-color: #FAFAFA;
           margin-top: 20px;
           border-top: 1px solid #EEE;
        }

        #loading {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            z-index: 999999;
            background: rgba(255, 255, 255, 0.75);
        }

        #loading img {
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <div id="loading" class="hidden">
        <img src="<?= base_url('assets/img/loading.gif'); ?>">
    </div>

    <header>
        <a href="https://agendastic.davidvega.cl" target="_blank">
            <img src="<?= base_url('assets/img/installation-banner.png'); ?>"
                 alt="Agendastic Installation Banner">
        </a>
    </header>

    <div class="content container-fluid">
        <div class="welcome">
            <h3>Instalación</h3>
        </div>

        <div class="alert hidden"></div>

        <div class="row">
            <div class="admin-settings col-xs-12 col-sm-5">
                <h3>Usuario Administrador</h3>

                <div class="form-group">
                    <label for="first-name" class="control-label">Nombre</label>
                    <input type="text" id="first-name" class="form-control" />
                </div>

                <div class="form-group">
                <label for="last-name" class="control-label">Apellido</label>
                <input type="text" id="last-name" class="form-control" />
                </div>

                <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="text" id="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="phone-number" class="control-label">Teléfono</label>
                    <input type="text" id="phone-number" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" id="username" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" id="password" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="retype-password" class="control-label">Confirmar Password</label>
                    <input type="password" id="retype-password" class="form-control" />
                </div>
            </div>

            <div class="company-settings col-xs-12 col-sm-5">
                <h3>Empresa / Organización</h3>

                <div class="form-group">
                    <label for="company-name" class="control-label">Nombre de Empresa / Organización</label>
                    <input type="text" id="company-name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="company-email" class="control-label">Email Empresa / Organización</label>
                    <input type="text" id="company-email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="company-link" class="control-label">Sitio Web</label>
                    <input type="text" id="company-link" class="form-control" />
                </div>
            </div>
        </div>

        <br>

        <p>
            <h3>Licencia</h3>
            Agendastic tiene una licencia <span class="label label-default">GPLv3</span>.
            Al usar el código de Agendastic en cualquier manera <br> aceptas los términos descritos en la siguiente URL:
            <a href="http://www.gnu.org/copyleft/gpl.html">http://www.gnu.org/copyleft/gpl.html</a>
        </p>

        <br>

        <button type="button" id="install" class="btn btn-success btn-large">
            <i class="icon-white icon-ok"></i>
            Comenzar instalación de Agendastic</button>
    </div>

    <footer>
        Powered by <a href="https://agendastic.davidvega.cl">Agendastic</a>
    </footer>

    <script>
        var GlobalVariables = {
            'csrfToken': <?= json_encode($this->security->get_csrf_hash()); ?>,
            'baseUrl': <?= json_encode(config('base_url')); ?>
        };

        var EALang = <?= json_encode($this->lang->language); ?>;
    </script>

    <script src="<?= asset_url('assets/ext/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= asset_url('assets/js/general_functions.js'); ?>"></script>
    <script src="<?= asset_url('assets/ext/datejs/date.js'); ?>"></script>
    <script src="<?= asset_url('assets/js/installation.js'); ?>"></script>
</body>
</html>
