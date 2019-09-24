import React from "react";
import { Route, Switch, Redirect } from "react-router-dom";
import { connect } from "react-redux";
import { createStructuredSelector } from "reselect";
import "./App.css";
import CheckoutPage from "./pages/checkout/checkout.component";
import HomePage from "./pages/homepage/homepage.component";
import SignInAndSignUpPage from "./pages/sign-in-and-sign-up/sign-in-and-sign-up.component";
import AboutPage from "./pages/about/about.component";
import Header from "./components/header/header.component";
import { setCurrentUser } from "./redux/user/user.actions";
import { selectCurrentUser } from "./redux/user/user.selector";
import { success } from "./notification";

class App extends React.Component {
  unsubscribeFromAuth = null;

  componentDidMount() {
    const user = localStorage.getItem("user");
    const { setCurrentUser } = this.props;
    setCurrentUser(user);
  }

  componentWillUnmount() {
    this.unsubscribeFromAuth();
  }

  removeAuthUser = () => {
    localStorage.removeItem("user");
    success("Successfully logged out");
    window.location.reload(false);
  };

  render() {
    return (
      <div>
        <Header removeAuthUser={this.removeAuthUser} />
        <Switch>
          <Route exact path="/" component={HomePage} />
          <Route exact path="/about" component={AboutPage} />
          <Route exact path="/checkout" component={CheckoutPage} />
          <Route
            path="/signin"
            render={() =>
              this.props.currentUser ? (
                <Redirect to="/" />
              ) : (
                <SignInAndSignUpPage />
              )
            }
          />
        </Switch>
      </div>
    );
  }
}

const mapStateToProps = createStructuredSelector({
  currentUser: selectCurrentUser
});

const mapDispatchToProps = dispatch => ({
  setCurrentUser: user => dispatch(setCurrentUser(user))
});
export default connect(
  mapStateToProps,
  mapDispatchToProps
)(App);
