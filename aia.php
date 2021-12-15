<?php include 'includes/header.php'; ?>
  <table>
      <tr>
        <th>Client Name</th>
        <td>Auntie Nona</td>
      </tr>
      <tr>
        <th>Business Name</th>
        <td>Nona's Pizza</td>
      </tr>
      <tr>
        <th>Brand New Site</th>
        <td>Auntie Nona has the final decision making capacity</td>
      </tr>
      <tr>
        <th>Type</th>
        <td>Business Application</td>
      </tr>
      <tr>
        <th>Goals</th>
        <td>Deploy a three-tiered, full stack application on AWS cloud infrastructure. The application should allow an end user to order a pizza and for auntie nona to receive orders. The application will allow users to update orders and receive text messages re: order status. The application will save orders in a database and allow Auntie Nona to reference orders.</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Audiences</th>
        <th>Issues</th>
        <th>Approach</th>
      </tr>
      <tr>
        <td>Business Owners</td>
        <td>
          <ul>
            <li>Want customers to be able to order pizza online.</li>
            <li>Want an ordering application that never crashes.</li>
            <li>Want to save money on data and server space.</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Create a client-side application that allows users to place orders.</li>
            <li>Use Dynamo DB, API Gateway, and Cloudfront to scale and monitor the application.</li>
            <li>Invoke the application using AWS Lambda, only giving it to browsers when they request it.</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>Hungry Pizza Shoppers</td>
        <td>
          <ul>
            <li>Want a seamless desktop ordering experience.</li>
            <li>Want the status of their pizza as it's being prepared, and want a text message when it's ready.</li>
            <li>Want to chat with someone re: large orders for corporate events.</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Create a functional UI that makes ordering easy!</li>
            <li>Create a dynamic route for every pizza order that returns a routine countdown to completion unique to that order.</li>
            <li>Create a chat portal that allows customers to contact the pizza shop.</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>Business Employees</td>
        <td>
          <ul>
            <li>Want a screen over the kitchen to see orders as they come in.</li>
            <li>Want customers to pickup pizzas on time.</li>
            <li>Want an easy way to chat with customers who want information, rather than having to speak with them on the phone.</li>
          </ul>
        </td>
        <td>
          <ul>
            <li>Create a route that only employees and Nona can see, listing orders by status.</li>
            <li>Send customers text messages when their pizzas are ready for pickup.</li>
            <li>Create a chat portal that allows customers to contact the pizza shop.</li>
          </ul>
        </td>
      </tr>
  </table>
<?php include 'includes/footer.php'; ?>