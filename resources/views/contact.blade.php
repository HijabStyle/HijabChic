<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('components.navbar')

<section class="bg-gradient-to-b from-purple-700 to-white py-20">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contact Us</h2>
      <form onsubmit="sendMail(event)" class="space-y-8 w-full bg-white p-4 rounded-lg shadow-sm">
              <div class="">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                  <input type="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600" placeholder="name@femail.com" required>
                </div>
                <div class="">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                    <input type="text" id="subject" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600" placeholder="Let us know how we can help you" required>
                </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
              <textarea id="message" rows="6" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-purple-700 sm:w-fit hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300">Send message</button>
      </form>
  </div>
</section>

<script>
function sendMail(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    const mailtoLink = `mailto:{{$profile->email}}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(
        `From: ${email}\n\n${message}`
    )}`;

    window.location.href = mailtoLink;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>