
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Live Log - AuraFM</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 400px; margin: 0 auto; }
        .btn { background: #FF6B35; color: white; border: none; padding: 15px; width: 100%; font-size: 16px; cursor: pointer; border-radius: 4px; }
        .btn:hover { background: #E55A2B; }
        select { width: 100%; padding: 10px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎙️ Логирование эфира</h2>
        
        <label>Программа:</label>

        <select id="showSelect">
            <option value="0">-- Выберите шоу --</option>
            <option value="1">Утренний драйв</option>
            <option value="2">Вечерний чилл</option>
        </select>

        <label>Трек:</label>
        <select id="trackSelect">
            <option value="0">-- Выберите трек --</option>
            <option value="101">Artist - Song Title</option>
        </select>

        <button class="btn" onclick="alert('Запрос отправлен на api.php (имитация)')">ЛОГИРОВАТЬ ЭФИР</button>
    </div>
</body>
</html>
