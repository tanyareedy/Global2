<div id="heroContent">
    <form class=" p-3 rounded" id="applyForm" action="/controllers/process.php"
          method="post">
        <h1 class="py-5"><strong>Speak to an expert</strong></h1>

        <div class="form-row">
            <div class="form-group col-md-6 col-lg-4">

                <label for="firstName"><strong>Name:</strong>
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="text" name="name"
                        id="firstName"
                        placeholder="Full name"
                        required>

                <label
                        class="pt-2"
                        for="mailFrom"><strong>Email:</strong>
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="email" name="mailFrom"
                        id="mobileNo"
                        placeholder="Email address"
                        required>
            </div>

            <div class="form-group col-md-6 col-lg-4">
                <label
                        for="mobileNo"><strong>Mobile No:</strong>
                </label>
                <input
                        class="form-control input-group-lg py-4 rounded"
                        type="number"
                        name="mobileNo"
                        id="mobileNo"
                        placeholder="Mobile Number"
                        required>


                <label class="pt-2" for="exampleFormControlSelect1"><strong> Choose Program:</strong></label>
                <select
                        class="form-control input-group-lg py-2 rounded"
                        name="program"
                        id="exampleFormControlSelect1"
                        required>

                    <option value="Cyprus">Cyprus</option>
                    <option value="Canada">Canada</option>
                    <option value="Greece">Greece</option>
                    <option value="Grenada">Grenada</option>
                    <option value="USA">USA</option>
                </select>
            </div>


            <div class="form-group col-md-12 col-lg-4">
                <label
                        for="message"><strong>Message: </strong></label>
                <textarea
                        class="form-control rounded"
                        name="message"
                        rows="12" cols="10"

                        id="message"
                        placeholder="* Briefly describe your situation and any questions you may have."
                        style="height: 150px" required></textarea>
            </div>
            <div class="mt-lg-3 pt-2">
            </div>
        </div>
        <button type="submit" name="submit"  class="btn bg-primary btn-lg btn-block text-white">Send message</button>

    </form>
</div>

<style>
    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        /* background-color: #fff; */
        background-clip: padding-box;
        border: 3px solid #10a87f;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
</style>




<script>
    function myFunction() {
        alert("message sent, you will get a reply shortly");
    }
</script>


