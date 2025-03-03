<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Form</title>
</head>
<body>
    <h2>Admin Data Submission Form</h2>

    @if(session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif

    <form action="{{ url('/admin/data') }}" method="POST">
        @csrf
        <label for="site">Site:</label>
        <input type="text" id="site" name="site" value="{{ old('site') }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="admin_id">Admin ID:</label>
        <input type="text" id="admin_id" name="admin_id" value="{{ old('admin_id') }}" required><br><br>

        <label for="poster_id">Poster ID:</label>
        <input type="text" id="poster_id" name="poster_id" value="{{ old('poster_id') }}" required><br><br>

        <!-- Hidden Device Field -->
        <input type="hidden" id="device" name="device" value="" required><br><br>

        <button type="submit">Submit</button>
    </form>
    

    <script>
    // Function to detect OS from User-Agent
    function getOS() {
        let userAgent = navigator.userAgent;
        let platform = navigator.platform;
        
        if (/Windows NT 10/.test(userAgent)) return "Windows 10";
        if (/Windows NT 6.3/.test(userAgent)) return "Windows 8.1";
        if (/Windows NT 6.2/.test(userAgent)) return "Windows 8";
        if (/Windows NT 6.1/.test(userAgent)) return "Windows 7";
        if (/Mac OS X/.test(userAgent)) return "macOS";
        if (/Linux/.test(userAgent)) return "Linux";
        if (/Android/.test(userAgent)) return "Android";
        if (/iPhone|iPad|iPod/.test(userAgent)) return "iOS";
        
        return "Unknown OS";
    }

    // Set OS in the hidden input field
    document.getElementById('device').value = getOS();
</script>
</body>
</html>
