<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class=" m-4">
        <div class="form-group">
                            <label for="userName">Name</label>
                            <input type="text" class="form-control" id="userName" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                          <label for="userPhone">Phone</label>
                        <input type="tel" class="form-control" id="userPhone" placeholder="Enter your phone number" required>
                    </div>
                  <div class="form-group">
                    <label for="userAddress">Address</label>
                        <input type="text" class="form-control" id="userAddress" placeholder="Enter your address" required>
                    </div>
                    <div class="form-row">
                      <div class="form-group ">
                        <label for="userCity">City</label>
                            <input type="text" class="form-control" id="userCity" placeholder="Enter your city" required>
                          </div>
                        <div class="form-group col-md-6">
                            <label for="userZip">Zip</label>
                            <input type="text" class="form-control" id="userZip" placeholder="Zip code" required>
                        </div>
                        <div class="mb-4">
                <div class="form-group">
                    <label for="consumption">Electricity Consumption (kWh):</label>
                    <input type="number" class="form-control" id="consumption" placeholder="Enter your consumption" required>
                <div class="form-group">
                  <label for="rate">Rate (per kWh in $):</label>
                    <input type="number" class="form-control" id="rate" placeholder="Enter the rate" required>
                </div>
                <div class="mt-4 text-center">
                  <h4>Total Cost: $<span id="totalCost">0.00</span></h4>

                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>