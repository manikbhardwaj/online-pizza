import React from "react";
import { withRouter } from "react-router-dom";
import FormInput from "../form-input/form-input.component";
import CustomButton from "../custom-button/custom-button.component";
import { success, errormsg } from "../../notification";

import "./sign-in.styles.scss";
import { API_HOST } from "../../env";
import axios from "axios";

class SignIn extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      email: "",
      password: "",
      notificaton: null
    };
  }

  handleSubmit = async event => {
    event.preventDefault();

    const { email, password } = this.state;

    try {
      const response = await axios.post(`${API_HOST}/api/login`, {
        email: email,
        password: password
      });

      localStorage.setItem("user", JSON.stringify(response.data.data));
      window.location.reload(false);
      success("Successfully logged in");
    } catch (errors) {
      errormsg("Invalid Credentials");
    }
  };

  handleChange = event => {
    const { value, name } = event.target;
    this.setState({ [name]: value });
  };

  render() {
    return (
      <div className="sign-in">
        {this.state.notificaton && (
          <div className="alert mt-3 alert-success">
            <p className="text-center pt-2">{this.state.notificaton}</p>
          </div>
        )}
        <h2>I already have an account</h2>
        <span>Sign in with your email and password</span>

        <form onSubmit={this.handleSubmit}>
          <FormInput
            name="email"
            type="email"
            handleChange={this.handleChange}
            value={this.state.email}
            label="email"
            required
          />
          <FormInput
            name="password"
            type="password"
            value={this.state.password}
            handleChange={this.handleChange}
            label="password"
            required
          />
          <div className="buttons">
            <CustomButton type="submit"> Sign in </CustomButton>
          </div>
        </form>
      </div>
    );
  }
}

export default withRouter(SignIn);
