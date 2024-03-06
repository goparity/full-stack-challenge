# The Front-end 🎨

Under the "frontend-challenge" folder you will find the skeleton of a Vue.js project, which we encourage you to use.

You should use the provided API and the logic you developed in the back-end challenge to get the list of amortizations, the details about a specific amortization and trigger the payments.

The project provided already contains some dependencies installed that we would like you to use and should help you develop this part of the challenge:

- vue-router -> for creating the multiple pages you'll need
- axios -> to connect to the back-end's API
- vuex -> to store the data you get from the back-end
- tailwindcss -> to style your app

## Task 1 - Index and Show page 📋

Create an application with at least two different routes
- one that display a list of amortizations 
- one that should contain more details about each amortization.

** Be creative, be inspired by our platform and take as many elements as you wish. Don't forget to document any assumptions or considerations made during the implementation. We are interested in seeing your problem-solving approach and coding style, so please avoid using external libraries other the ones provided: Vue, TypeScript and TailwindCSS for this particular challenge. **

## Task 2 - Pay button 💰

The index page should also have a button to pay all amortizations. 

Make sure your button:

- Talks to the command you created in the backend-challenge.
- Is included in a form that has one date input than can be empty
- If the input is empty: the button should consider today's date
- If the input is not empty: the button should consider the date the user has given

## Extra credit 💳
If you want to go the extra mile (something we value a lot in our team) you can also develop a metrics page.

This page could contain some charts with metrics about the amortizations, some examples could be:
- chart with paid vs. unpaid amortizations
- chart with amortizations that paid on time vs. amortizations that are in arrears (should already have been paid) 

For the charts we advise you to use [Chart.js](https://www.chartjs.org/) which has a pretty good [Vue.js SDK](https://vue-chartjs.org/). Also you'll need to develop the back-end support for this.