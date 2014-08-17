<?php
    page::set_title(page::get_language("title"));
    page::load_tpl("header");
?>

    <h1><?= page::get_language("h1"); ?></h1>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Действия</th>
            <th>Название</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>

                <div class="btn-group">
                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"></span></button>
                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                </div>

            </td>
            <td>Otto</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>

        </tr>
        <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>

        </tr>
        </tbody>
    </table>

<?php page::load_tpl("footer"); ?>