import React from 'react'
import { Switch, Route, Redirect } from 'react-router-dom'
// 以下作成したコンポーネント
import Signin from './Signin'
import Top from './Top'
import Post from './Post'
import Sell from './Sell'
import User from './User'
import MyPage from './MyPage'
import Search from './Search'
import Header from './Header'

const App = () => {
  return (
    <>
      <Header />
      <Switch>
        <Route exact path='/signin' component={Signin} />
        <Route path='/' component={Top} exact />
        <Route path='/posts/:id' component={Post} exact />
        <Route path='/sell' component={Sell} exact />
        <Route path='/u/:id' component={User} exact />
        <Route path='/my' component={MyPage} exact />
        <Route path='/search' component={Search} exact />
        {/* /post/:id のidは13桁の数字、など決まっていれば正規表現で以下のように書ける */}
        {/* <Route path='/posts/:id([0-9]{13})' component={Post} exact /> */}
        <Redirect to='/' />
      </Switch>
    </>
  )
}

export default App
