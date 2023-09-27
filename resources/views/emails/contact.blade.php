<!-- resources/views/emails/contact.blade.php -->
<p>You have received a new contact form submission:</p>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Message:</strong> {!! $formData['message'] !!}</p>
