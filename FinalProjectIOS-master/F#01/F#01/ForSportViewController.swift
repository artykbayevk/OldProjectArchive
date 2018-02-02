//
//  ForSportViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class ForSportViewController: UIViewController,UITableViewDataSource,UITableViewDelegate {
    var array = [["SNOWBOARDING","1","1-1"],["SKIING","2","2-1"],["MOTORCYCLING","3","3-1"],["SKATING","4","4-1"],["PARACHUTING","5-0","5-1"]]
    var devices = ["Helmet, Wrist guards  Knee pads\n","Skis, Boots and Poles\n","Ear Plugs,Tool Kit and Fix-a-Flat\n","Skateboard,Clothes and Helmet\n","Static line and Accelerated Free Fall\n"]
    var location = ["Mammoth Mountain","Vail","Mount Bachelor","Mount Hood Meadows","Mt Baker"]
    
    @IBOutlet weak var sportTableView: UITableView!
    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }
    
    //Changing Status Bar
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return array.count
    }
    
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCellWithIdentifier("cell", forIndexPath: indexPath) as? SportTableViewCell
        cell!.backInCell.image = UIImage(named: array[indexPath.row][1])
        cell!.labelInCell?.text = array[indexPath.row][0]
        cell!.logoInCell.image = UIImage(named: array[indexPath.row][2])
        return cell!
    }
    
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier == "show"{
            if let indexPath = sportTableView.indexPathForSelectedRow{
                let dest = segue.destinationViewController as! SportDetailViewController
                dest.stringForDevises = devices[indexPath.row]
                dest.stringForLocation = location[indexPath.row]
            }
        }
    }
    @IBAction func unwindSegue(segue: UIStoryboardSegue){
        
    }

    
    

}
