
const form = document.getElementById("contact-form");
form.addEventListener("submit", async event => {
  event.preventDefault();  // prevent the browser from redirecting to the form's action url
  const url = form.action;
  let newFormData = new FormData(form);
  let data = Object.fromEntries(newFormData.entries())
  // Run any form validation code here
  const res = await fetch(url, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
  })
	
  if (res.ok) {
      form.innerHTML = '<p class="block absolute inset-0 flex items-center justify-center p-16 text-center text-5xl">Success! Thank you for reaching out. I will be in touch soon.</p>'
  } else {
      form.innerHTML = '<p class="block absolute inset-0 flex items-center justify-center p-16 text-center text-5xl">Something went wrong. Refresh and try again.</p>'
  }
  // if you want to see the body use:
  // const body = await res.json()
})

