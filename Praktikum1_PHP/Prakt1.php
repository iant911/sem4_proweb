<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="lat1.css">
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="angka1" required value="<?php if(isset($_POST['angka1'])) echo $_POST['angka1']; ?>">
        <input type="number" name="angka2" required value="<?php if(isset($_POST['angka2'])) echo $_POST['angka2']; ?>">
        <select name="operator" required>
            <option value="tambah" <?php if(isset($_POST['operator']) && $_POST['operator'] == "tambah") echo "selected"; ?>>+</option>
            <option value="kurang" <?php if(isset($_POST['operator']) && $_POST['operator'] == "kurang") echo "selected"; ?>>-</option>
            <option value="kali" <?php if(isset($_POST['operator']) && $_POST['operator'] == "kali") echo "selected"; ?>>*</option>
            <option value="bagi" <?php if(isset($_POST['operator']) && $_POST['operator'] == "bagi") echo "selected"; ?>>/</option>
        </select>
        <input type="submit" value="Hitung">
        <?php
        if(isset($_POST['hasil'])) {
            echo '<output type="number" name="hasil" value="' . $_POST['hasil'] . '">';
        } else {
            echo '<output type="number" name="hasil" value="">';
        }
        ?>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Pembagian dengan nol tidak dapat dilakukan.";
                }
                break;
            default:
                echo "Operator tidak valid.";
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
[00:39, 06/05/2024] Paris: <!DOCTYPE html>
<html>
<head>
    <title>konversi nilai mata kuliah</title>
    <link rel="stylesheet" type="text/css" href="lat2.css">
</head>
<body>
    <h2>konversi nilai mata kuliah</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nilai">Nilai Angka: </label>
        <input type="text" id="nilai" name="nilai" required value="<?php if(isset($_POST['nilai'])) echo $_POST['nilai']; ?>">
        <input type="submit" value="konversi"> 
        <?php
        if(isset($_POST['hasil'])) {
            echo '<output type="number" name="hasil" value="' . $_POST['hasil'] . '">';
        } else {
            echo '<output type="number" name="hasil" value="">';
        }
        ?>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        if (!is_numeric($nilai)) {
            echo "<h3>Nilai harus berupa bilangan numerik</h3>";
        } else {
            $nilai = floatval($nilai);
            if ($nilai >= 3.5) {
                echo "<h3>Nilai Anda: A</h3>";
            } elseif ($nilai >= 3.0) {
                echo "<h3>Nilai Anda: B</h3>";
            } elseif ($nilai >= 2.5) {
                echo "<h3>Nilai Anda: C</h3>";
            } elseif ($nilai >= 2.0) {
                echo "<h3>Nilai Anda: D</h3>";
            } else {
                echo "<h3>Nilai Anda: E</h3>";
            }
        }
    }
    ?>
<!-- Code inject