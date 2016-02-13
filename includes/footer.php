        </div>
        <div id="footer">Copyright 2016, Widget Corp</div>
    </body>
</html>
<?php
    // 5. Close Connection
    if(isset($connection)) {
        mysql_close($connection);
    }