<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TalentHub - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-purple-600 via-purple-700 to-indigo-800 flex items-center justify-center min-h-screen p-4">

  <div class="container mx-auto max-w-6xl grid md:grid-cols-2 gap-8 items-center">
    
    <!-- Left Side - Welcome Back Section -->
    <div class="text-white space-y-6 p-8 hidden md:block">
      <div class="flex items-center space-x-3 mb-8">
        <i class="fas fa-users-cog text-5xl"></i>
        <h1 class="text-5xl font-bold">TalentHub</h1>
      </div>
      
      <h2 class="text-4xl font-bold leading-tight mb-4">
        Welcome Back!
      </h2>
      
      <p class="text-lg text-purple-100 leading-relaxed">
        We're excited to see you again. Sign in to access your dashboard and continue your journey with TalentHub.
      </p>
      
      <div class="space-y-4 mt-8">
        <div class="flex items-start space-x-3">
          <i class="fas fa-chart-line text-2xl text-green-400 mt-1"></i>
          <div>
            <h3 class="font-semibold text-xl">Track Your Progress</h3>
            <p class="text-purple-200">Monitor applications and recruitment activities in real-time</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-3">
          <i class="fas fa-bell text-2xl text-green-400 mt-1"></i>
          <div>
            <h3 class="font-semibold text-xl">Stay Updated</h3>
            <p class="text-purple-200">Get instant notifications on new matches and opportunities</p>
          </div>
        </div>
        
        <div class="flex items-start space-x-3">
          <i class="fas fa-shield-alt text-2xl text-green-400 mt-1"></i>
          <div>
            <h3 class="font-semibold text-xl">Secure Access</h3>
            <p class="text-purple-200">Your account is protected with advanced security features</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-2xl w-full">
      <div class="text-center mb-8">
        <div class="flex items-center justify-center space-x-2 mb-3">
          <i class="fas fa-users-cog text-3xl bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent"></i>
          <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">TalentHub</h1>
        </div>
        <p class="text-gray-600 text-sm">Sign in to your account</p>
      </div>

      <form class="space-y-5" action="../../controllers/LoginController.php" method="post">
      
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">
            <i class="fas fa-envelope mr-2 text-purple-600"></i>Email
          </label>
          <input 
            type="email"
            name="email"
            placeholder="Enter your email"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent focus:outline-none transition duration-300 hover:border-purple-400"
            required
          />
        </div>

        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">
            <i class="fas fa-lock mr-2 text-purple-600"></i>Password
          </label>
          <input 
            type="password"
            name="password"
            placeholder="Enter your password"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent focus:outline-none transition duration-300 hover:border-purple-400"
            required
          />
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center">
            <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
            <span class="ml-2 text-gray-600">Remember me</span>
          </label>
          <a href="#" class="text-purple-600 font-semibold hover:text-purple-700 transition duration-200">Forgot password?</a>
        </div>

        <button 
          type="submit"
          class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold py-3 rounded-lg hover:from-purple-700 hover:to-indigo-700 transform hover:scale-[1.02] transition duration-300 shadow-lg hover:shadow-xl mt-6"
        >
          Login
        </button>
        
        <p class="text-center text-gray-600 text-sm mt-4">
          Don't have an account? 
          <a href="./register" class="text-purple-600 font-semibold hover:text-purple-700 transition duration-200">Register</a>
        </p>
      </form>
    </div>

  </div>

</body>
</html>