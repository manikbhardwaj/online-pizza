import React from "react";
import FormInput from "../form-input/form-input.component";
import CustomButton from "../custom-button/custom-button.component";
import "./sign-up.styles.scss";
import axios from "axios";
import { API_HOST } from "../../env";
import { success, errormsg } from "../../notification";
import { setCurrentUser } from "../../redux/user/user.actions";

class SignUp extends React.Component {
  constructor() {
    super();

    this.state = {
      name: "",
      email: "",
      password: "",
      password_confirmation: ""
    };
  }

  handleSubmit = async event => {
    event.preventDefault();

    const { name, email, password, password_confirmation } = this.state;
    if (password !== password_confirmation) {
      alert("passwords don't match");
      return;
    }

    try {
      const response = await axios.post(`${API_HOST}/api/register`, {
        name: name,
        email: email,
        password: password,
        password_confirmation: password_confirmation
      });

      localStorage.setItem("user", JSON.stringify(response.data.data));
      setCurrentUser(response.data.data);

      this.setState({
        name: "",
        email: "",
        password: "",
        password_confirmation: ""
      });
      success("Signed up successfully!");
    } catch (errors) {
      if (errors.response && errors.response.status === 422) {
        errormsg(errors.response.data["message"]);
      }
    }
  };

  handleChange = event => {
    const { name, value } = event.target;

    this.setState({ [name]: value });
  };

  render() {
    const { name, email, password, password_confirmation } = this.state;
    return (
      <div className="sign-up">
        <h2 className="title">I do not have a account</h2>
        <span>Sign up with your email and password</span>
        <form className="sign-up-form" onSubmit={this.handleSubmit}>
          <FormInput
            type="text"
            name="name"
            value={name}
            onChange={this.handleChange}
            label="Display Name"
            required
          />
          <FormInput
            type="email"
            name="email"
            value={email}
            onChange={this.handleChange}
            label="Email"
            required
          />
          <FormInput
            type="password"
            name="password"
            value={password}
            onChange={this.handleChange}
            label="Password"
            required
          />
          <FormInput
            type="password"
            name="password_confirmation"
            value={password_confirmation}
            onChange={this.handleChange}
            label="Confirm Password"
            required
          />
          <CustomButton type="submit">SIGN UP</CustomButton>
        </form>
      </div>
    );
  }
}

export default SignUp;
