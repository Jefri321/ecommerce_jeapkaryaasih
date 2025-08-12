<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')


    <style>
    .separator {
      display: flex;
      align-items: center;
      text-align: center;
      color: #6b7280; /* gray-500 */
      font-size: 0.875rem;
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }
    .separator::before,
    .separator::after {
      content: "";
      flex: 1;
      border-bottom: 1px solid #d1d5db; /* gray-300 */
      margin-left: 0.75rem;
      margin-right: 0.75rem;
    }
    /* Focus ring for inputs and buttons */
    input:focus, button:focus, a:focus {
      outline-offset: 2px;
      outline-color: #7c3aed; /* focus purple-600 */
      outline-style: solid;
      outline-width: 2px;
      outline-radius: 0.375rem; /* rounded-md */
    }
    /* Link purple color consistent */
    a {
      color: #5c4dff; /* indigo-600 */
      text-decoration: none;
    }
    a:hover {
      color: #4338ca; /* indigo-700 */
      text-decoration: underline;
    }
    .rounded-lg {
      border-radius: 0.5rem;
    }
    </style>
  </head>
  <body class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
   
    <div class="container mx-auto">
       {{ $slot }}
    </div>
    
    @stack('scripts')

  </body>
</html>