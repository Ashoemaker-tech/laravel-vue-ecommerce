<script setup>

</script>

<template>
    <div class="w-full bg-gray-200">
    
      <div class="flex w-full bg-white py-3 rounded-lg shadow-lg justify-between items-center px-8 my-4">
        <p>Pagination</p>
        <input class="rounded-lg border-gray-300" type="text" placeholder="Search products">
        
        
      </div>
  <table class="table w-full">
    <!-- head -->
    <thead class="bg-gray-300">
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Price</th>
        <th>Last Updated</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr class="bg-white border-b-2 border-gray-300">
        <th>
          <p>1</p>
        </th>
        <td>
            <div class="avatar">
              <div class="rounded-lg w-24 h-24">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib" alt="product image" />
              </div>
            </div>
        </td>
        <td>
          <p>product title</p>
          
        </td>
        <td>$99.99</td>
        <td>
          <p>11/11/11</p>
        </td>
        <th>
          <div class="dropdown">
            <label tabindex="0" class="cursor-pointer hover:bg-gray-200 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2  bg-white rounded-box w-52">
              <li><a class="hover:bg-gray-200">Edit</a></li>
              <li><a class="hover:bg-gray-200">Delete</a></li>
            </ul>
          </div>
        </th>
      </tr>
    </tbody>
    <!-- foot -->
    <tfoot class="bg-gray-300">
      <tr>
        <th>Showing 1 of 6</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </tfoot>
    
  </table>
</div>
</template>