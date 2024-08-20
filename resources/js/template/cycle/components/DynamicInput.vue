<template>
  <div class="hello">
    <div class="w-full mt-4 p-10">
      <button
        type="button"
        class="flex justify-end ml-2 rounded-md border btn btn-success"
        @click="addMore()"
      >
        Add More
      </button>
      <div v-for="(testimonial, index) in testimonials" :key="index">
        <div class="flex justify-start ml-2 mt-4">
          <input
            v-model="testimonial.review"
            placeholder="Enter Customer Review"
            class="w-full py-2 border border-indigo-500 rounded"
          />
           <input
            v-model="testimonial.reviewer_name"
            placeholder="Enter Reviewer Name"
            class="w-full py-2 border border-indigo-500 rounded"
          />
          <input
            type="file"
            class="w-full py-2 border border-indigo-500 rounded"
          />
          <button
            type="button"
            class="btn btn-danger"
            @click="remove(index)"
            v-show="index != 0"
          > <i class="fas fa-trash"></i>
            Remove
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
  data() {
    return {
      testimonials: [
        {
          review: "",
          reviewer_name:"",
          reviewer_image:""
        },
      ],
    };
  },
  methods: {
    addMore() {
      this.testimonials.push({
        review: "",
        reviewer_name:"",
        reviewer_image:""
      });
    },
    remove(index) {
      this.testimonials.splice(index, 1);
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>