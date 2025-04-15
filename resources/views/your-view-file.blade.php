<!DOCTYPE html>
<html>
<head>
    <title>Select District</title>
    <!-- ...existing code... -->
</head>
<body>
    <!-- ...existing code... -->
    <select id="city" name="city">
        <!-- Options for cities -->
    </select>

    <select id="district" name="district">
        <option value="">Pilih Distrik</option>
    </select>

    <script>
        document.getElementById('city').addEventListener('change', function() {
            var cityId = this.value;
            fetch('/districts/' + cityId)
                .then(response => response.json())
                .then(data => {
                    var districtSelect = document.getElementById('district');
                    districtSelect.innerHTML = '<option value="">Pilih Distrik</option>';
                    data.forEach(function(district) {
                        var option = document.createElement('option');
                        option.value = district.id;
                        option.text = district.name;
                        districtSelect.appendChild(option);
                    });
                });
        });
    </script>
    <!-- ...existing code... -->
</body>
</html>
