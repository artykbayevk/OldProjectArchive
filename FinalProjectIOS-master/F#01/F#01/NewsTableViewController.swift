//
//  NewsTableViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class NewsTableViewController: UITableViewController {
    let backgroundImage = UIImage(named: "back")
    
    var newsList = [Fornews]()
    override func viewDidLoad() {
        super.viewDidLoad()
        let imageView = UIImageView(image: backgroundImage)
        self.tableView.backgroundView = imageView
        let blurEffect = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: blurEffect)
        blurView.frame = imageView.bounds
        imageView.addSubview(blurView)
        self.refreshControl = UIRefreshControl()
        self.refreshControl?.addTarget(self, action: #selector(getSports), forControlEvents: UIControlEvents.ValueChanged)
        newsList.append(Fornews(title:"Just swipe",text: "Swipe for downloading",date: "Here will be date"))
        // Uncomment the following line to preserve selection between presentations
        // self.clearsSelectionOnViewWillAppear = false

        // Uncomment the following line to display an Edit button in the navigation bar for this view controller.
        // self.navigationItem.rightBarButtonItem = self.editButtonItem()
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }

    // MARK: - Table view data source

    override func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        // #warning Incomplete implementation, return the number of sections
        return 1
    }

    override func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // #warning Incomplete implementation, return the number of rows
        return newsList.count
    }

    override func tableView(tableView: UITableView, willDisplayCell cell: UITableViewCell, forRowAtIndexPath indexPath: NSIndexPath) {
        cell.backgroundColor = UIColor(white: 1, alpha: 0.5)
    }
    
    func getSports() {
        refreshControl?.beginRefreshing()
        let url = NSURL(string: "http://kamalkhan-backend.ml/finalpage.html")
        let urlRequest = NSMutableURLRequest(URL: url!)
        NSURLSession.sharedSession().dataTaskWithRequest(urlRequest) { (data, response, error) in
            guard response != nil else {
                print("response problem")
                dispatch_async(dispatch_get_main_queue(), {
                    self.refreshControl?.endRefreshing()
                })
                return
            }
            
            let httpResponse = response as! NSHTTPURLResponse
            let statusCode = httpResponse.statusCode
            if (statusCode == 200) {
                print("Everything is fine, file downloaded successfully.")
                do {
                    let json = try NSJSONSerialization.JSONObjectWithData(data!, options: .AllowFragments) as! [[String:AnyObject]]
                    for item in json{
                        if let title = item["title"] as? String {
                            if let text = item["text"] as? String{
                                if let date = item["date"] as? String{
                                    self.newsList.append(Fornews(title:title,text: text,date: date))
                                }
                            }
                        }
                    }
                    dispatch_async(dispatch_get_main_queue(), {
                        self.refreshControl?.endRefreshing()
                        self.tableView.reloadData()
                    })
                    
                } catch {
                    print(error)
                }
            }
            }.resume()
    }
    
    override func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCellWithIdentifier("cell", forIndexPath: indexPath) as! TableViewCell
        cell.textInCell?.text = newsList[indexPath.row].text
        cell.dateInCell?.text = newsList[indexPath.row].date
        cell.titleInCell?.text = newsList[indexPath.row].title
        // Configure the cell...
        
        return cell
    }
    
}
