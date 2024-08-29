<template>
    <!-- <i
        class="fas fa-cog gear-icon"
        data-bs-toggle="modal"
        :data-bs-target="'#' + modalId"
        :title="modalTitle"
    ></i> -->

    <div
        class="modal fade"
        :id="modalId"
        tabindex="-1"
        :aria-labelledby="modalId + 'Label'"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" :id="modalId + 'Label'">
                        {{ modalTitle }}
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <button
                        type="button"
                        class="flex justify-end ml-2 rounded-md border btn btn-success"
                        @click="addMore()"
                    >
                        <i class="fas fa-plus"></i>
                        Add More
                    </button>
                    <div class="row">
                        <div class="border m-2"
                            v-for="(testimonial, index) in testimonials"
                            :key="index"
                        >
                            <div class="flex justify-start ml-2 mt-4">
                                <input
                                    v-model="testimonial.id"
                                    type="hidden"
                                />
                                 <input
                                    v-model="testimonial.review"
                                    placeholder="Enter Customer Review"
                                    class="w-full py-2 border border-indigo-500 rounded mr-2 col-8"
                                    required
                                />
                                <input
                                    v-model="testimonial.reviewer_name"
                                    placeholder="Enter Reviewer Name"
                                    class="w-full py-2 border border-indigo-500 rounded col-3"
                                    required
                                />
                                <input
                                    type="file"
                                    @change="handleFileChange($event, index)"
                                    class="w-full py-2 border border-indigo-500 rounded mt-3"
                                />
                                <button
                                    style="margin-left: 5px"
                                    type="button"
                                    class="btn btn-danger"
                                    @click="remove(index)"
                                    v-show="index != 0"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-dark"
                        @click="saveChanges"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  props: ["modalId", "modalTitle", "data"],
  data() {
    return {
      testimonials: [
        {
          id:"",
          review: "",
          reviewer_name: "",
          reviewer_image: "",
        },
      ],
    };
  },
   watch: {
    data(newData) {
      if (newData && newData.length > 0) {
        // Assign the first item from `data` to `testimonials`
        this.testimonials[0] = { ...newData[0] };
      }
    }
  },
  mounted() {
    // Initialize testimonials on mount in case `data` is available
    if (this.data && this.data.length > 0) {
     this.testimonials = this.data.map(element => ({ ...element }));
    }
  },
  emits: ["update"],
  methods: {
    toast(icon, title) {
      this.$swal({
        toast: true,
        icon: icon,
        title: title,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
      });
    }, 
    validateTestimonials() {
      return this.testimonials.every(testimonial => 
        testimonial.review.trim() !== "" &&
        testimonial.reviewer_name.trim() !== ""
        // testimonial.reviewer_image !== ""
      );
    },
    addMore() {
      if(this.testimonials.length==5){
         this.toast("error", "You cannot add more than 5 items.");
        return;
      }
      this.testimonials.push({
        id: "",
        review: "",
        reviewer_name: "",
        reviewer_image: "",
      });
    },
    remove(index) {
      this.testimonials.splice(index, 1);
    },
    handleFileChange(event, index) {
      const file = event.target.files[0];
      if (file) {
        // Create a new array with the updated item
           const updatedTestimonials = [...this.testimonials];
           updatedTestimonials[index] = {
             ...updatedTestimonials[index],
             reviewer_image: file,
           };
           // Update the testimonials array
           this.testimonials = updatedTestimonials;
      }
    },
    saveChanges() {
      if (this.validateTestimonials()) {
        this.$emit("update", this.testimonials);
        const modalElement = document.getElementById(this.modalId);
      const modal = bootstrap.Modal.getInstance(modalElement);
      if (modal) {
        modal.hide();
      }
      } else {
         this.toast("error", "Please fill all fields.");
      }
    },
  },
};
</script>

<style scoped>
.gear-icon {
    position: absolute;
    margin-top: -12px;
    margin-left: 2px;
    background: #0d6efd;
    color: #ffffff;
    padding: 5px;
    border-radius: 50%;
    cursor: pointer;
    transition: box-shadow 0.3s ease;
}

.gear-icon:hover {
    box-shadow: 0 4px 8px rgba(135, 135, 135, 0.6),
        0 6px 20px rgba(145, 145, 145, 0.5);
}
</style>
